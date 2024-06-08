<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class OrderSteps
{
    public const SERVICES = 'services';
    public const SCHEDULE = 'schedule';
    public const CONFIRMATION = 'confirmation';

    public const stepToRoutesMapping = [
      OrderSteps::CONFIRMATION => 'pages.confirmation',
      OrderSteps::SCHEDULE     => 'pages.schedule',
      OrderSteps::SERVICES     => 'pages.services',
    ];

    protected ?Service $service = null;
    protected ?Schedule  $schedule = null;
    protected ?string $date = null;


    public function getService(): ?Service
    {
       return $this->service;
    }

    public function setService(int $serviceId): void
    {
        $service = Service::findOrFail($serviceId);
        $this->service = $service;
    }


    public function getTimeSlot(): ?Schedule
    {
        return $this->schedule;
    }

    protected function setTimeSlot(Schedule $schedule): void
    {
        $this->schedule = $schedule;
    }

    public function setStep(string $step, mixed $data): void
    {
        switch ($step) {
            case self::SERVICES:
                $this->setService($data);
                break;
            case self::SCHEDULE:
                $this->setTimeSlot($data);
                break;
            default:
                throw new \InvalidArgumentException('Invalid step');
        }
    }

    public static function getInstance(): OrderSteps
    {
        $entityFromSession = Session::has('order_steps') ? Session::get('order_steps') : new self();
        Session::put('order_steps', $entityFromSession);

        return $entityFromSession;
    }

    private function flush(): void
    {
        Session::put('order_steps', $this);
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setCurrentDate(): self
    {
        $this->date = Carbon::now()->format('d-m-Y');
        return $this;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;
        return $this;
    }

    public function renew(): void
    {
        Session::forget('order_steps');
    }
}
