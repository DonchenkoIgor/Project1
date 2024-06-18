<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class OrderSteps
{
    public const SERVICES = 'services';
    public const WORKER = 'worker';
    public const SCHEDULE = 'schedule';
    public const CONFIRMATION = 'confirmation';

    public const stepToRoutesMapping = [
      OrderSteps::CONFIRMATION => 'pages.confirmation',
      OrderSteps::WORKER      => 'pages.staff',
      OrderSteps::SCHEDULE     => 'pages.schedule',
      OrderSteps::SERVICES     => 'pages.services',
    ];

    protected ?Service $service = null;
    protected ?Schedule  $schedule = null;
    protected ?string $date = null;
    protected ?Worker $worker = null;


    public function getService(): ?Service
    {
       return $this->service;
    }

    public function setService(int $serviceId): void
    {
        $service = Service::findOrFail($serviceId);
        $this->service = $service;
    }

    public function getWorker(): ?Worker
    {
        return $this->worker;
    }

    public function setWorker(int $workerId): void
    {
        $worker = Worker::findOrFail($workerId);
        $this->worker = $worker;
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
            case self::WORKER;
                $this->setWorker($data);
                break;
            case self::SCHEDULE:
                $this->setTimeSlot($data);
                break;
            case self::CONFIRMATION;
                break;
            default:
                throw new \InvalidArgumentException('Invalid step');
        }
        $this->flush();
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
