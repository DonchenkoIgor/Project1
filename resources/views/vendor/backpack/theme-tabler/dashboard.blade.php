@extends(backpack_view('blank'))

@php
    $widgets['before_content'][] = [
        'type' => 'jumbotron',
        'heading' => trans('backpack::base.welcome'),
        'content' => trans('backpack::base.use_sidebar'),
        'button_link' => backpack_url('logout'),
        'button_text' => trans('backpack::base.logout'),
];
    \Backpack\CRUD\app\Library\Widget::add()
    ->to('before_content')
    ->type('div')
    ->class('row mt-3')
    ->content([
            \Backpack\CRUD\app\Library\Widget::make()
        ->type('progress')
        ->class('card mb-3')
        ->statusBorder('start')
        ->accentColor('success')
        ->ribbon(['top', 'la-user'])
        ->value('250')
        ->descriptiop('Registered users')
        ->progress(100*(int)239 / 1000)
        ->hint(1000 - 239 .' more until next milestone'),
            \Backpack\CRUD\app\Library\Widget::make()
        ->type('progress')
        ->class('card mb-3')
        ->statusBorder('start')
        ->accentColor('warning')
        ->ribbon(['top', 'la-user'])
        ->value('239')
        ->descriptiop('Registered users')
        ->progress(100*(int)239 / 1000)
        ->hint(1000 - 239 .' more until next milestone'),
            \Backpack\CRUD\app\Library\Widget::make()
        ->type('progress')
        ->class('card mb-3')
        ->statusBorder('start')
        ->accentColor('danger')
        ->ribbon(['top', 'la-user'])
        ->value('200')
        ->descriptiop('Registered users')
        ->progress(100*(int)239 / 1000)
        ->hint(1000 - 239 .' more until next milestone'),
        \Backpack\CRUD\app\Library\Widget::make()
        ->type('progress')
        ->class('card mb-3')
        ->statusBorder('start')
        ->accentColor('primary')
        ->ribbon(['top', 'la-user'])
        ->value('150')
        ->descriptiop('Registered users')
        ->progress(100*(int)239 / 1000)
        ->hint(1000 - 239 .' more until next milestone'),
])
@endphp

@section('content')
    <div class="row">
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Social Media Traffic</h3>
                </div>
                <table class="table card-table table-vcenter">
                    <thead>
                    <tr>
                        <th>Network</th>
                        <th colspan="2">Visitors</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Instagram</td>
                        <td>3,550</td>
                        <td class="w-50">
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-primary" style="width: 71.0%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Twitter</td>
                        <td>1,798</td>
                        <td class="w-50">
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-primary" style="width: 35.96%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Facebook</td>
                        <td>1,245</td>
                        <td class="w-50">
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-primary" style="width: 24.9%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>TikTok</td>
                        <td>986</td>
                        <td class="w-50">
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-primary" style="width: 19.72%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pinterest</td>
                        <td>854</td>
                        <td class="w-50">
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-primary" style="width: 17.08%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>VK</td>
                        <td>650</td>
                        <td class="w-50">
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-primary" style="width: 13.0%"></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Pinterest</td>
                        <td>420</td>
                        <td class="w-50">
                            <div class="progress progress-xs">
                                <div class="progress-bar bg-primary" style="width: 8.4%"></div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-12 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tasks</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter">
                        <tbody><tr>
                            <td class="w-1 pe-0">
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked="">
                            </td>
                            <td class="w-100">
                                <a href="#" class="text-reset">Extend the data model.</a>
                            </td>
                            <td class="text-nowrap text-secondary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path><path d="M16 3v4"></path><path d="M8 3v4"></path><path d="M4 11h16"></path><path d="M11 15h1"></path><path d="M12 15v3"></path></svg>
                                August 05, 2021
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                                    2/7
                                </a>
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 9h8"></path><path d="M8 13h6"></path><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path></svg>
                                    3</a>
                            </td>
                            <td>
                                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1 pe-0">
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task">
                            </td>
                            <td class="w-100">
                                <a href="#" class="text-reset">Verify the event flow.</a>
                            </td>
                            <td class="text-nowrap text-secondary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path><path d="M16 3v4"></path><path d="M8 3v4"></path><path d="M4 11h16"></path><path d="M11 15h1"></path><path d="M12 15v3"></path></svg>
                                January 01, 2019
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                                    3/10
                                </a>
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 9h8"></path><path d="M8 13h6"></path><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path></svg>
                                    6</a>
                            </td>
                            <td>
                                <span class="avatar avatar-sm">JL</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1 pe-0">
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task">
                            </td>
                            <td class="w-100">
                                <a href="#" class="text-reset">Database backup and maintenance</a>
                            </td>
                            <td class="text-nowrap text-secondary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path><path d="M16 3v4"></path><path d="M8 3v4"></path><path d="M4 11h16"></path><path d="M11 15h1"></path><path d="M12 15v3"></path></svg>
                                December 28, 2018
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                                    0/6
                                </a>
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 9h8"></path><path d="M8 13h6"></path><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path></svg>
                                    1</a>
                            </td>
                            <td>
                                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/002m.jpg)"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1 pe-0">
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked="">
                            </td>
                            <td class="w-100">
                                <a href="#" class="text-reset">Identify the implementation team.</a>
                            </td>
                            <td class="text-nowrap text-secondary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path><path d="M16 3v4"></path><path d="M8 3v4"></path><path d="M4 11h16"></path><path d="M11 15h1"></path><path d="M12 15v3"></path></svg>
                                November 11, 2020
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                                    6/10
                                </a>
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 9h8"></path><path d="M8 13h6"></path><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path></svg>
                                    12</a>
                            </td>
                            <td>
                                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/003m.jpg)"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1 pe-0">
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task">
                            </td>
                            <td class="w-100">
                                <a href="#" class="text-reset">Define users and workflow</a>
                            </td>
                            <td class="text-nowrap text-secondary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path><path d="M16 3v4"></path><path d="M8 3v4"></path><path d="M4 11h16"></path><path d="M11 15h1"></path><path d="M12 15v3"></path></svg>
                                November 14, 2021
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                                    3/7
                                </a>
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 9h8"></path><path d="M8 13h6"></path><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path></svg>
                                    5</a>
                            </td>
                            <td>
                                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000f.jpg)"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="w-1 pe-0">
                                <input type="checkbox" class="form-check-input m-0 align-middle" aria-label="Select task" checked="">
                            </td>
                            <td class="w-100">
                                <a href="#" class="text-reset">Check Pull Requests</a>
                            </td>
                            <td class="text-nowrap text-secondary">
                                <!-- Download SVG icon from http://tabler-icons.io/i/calendar -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z"></path><path d="M16 3v4"></path><path d="M8 3v4"></path><path d="M4 11h16"></path><path d="M11 15h1"></path><path d="M12 15v3"></path></svg>
                                February 11, 2021
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/check -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M5 12l5 5l10 -10"></path></svg>
                                    2/9
                                </a>
                            </td>
                            <td class="text-nowrap">
                                <a href="#" class="text-secondary">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/message -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 9h8"></path><path d="M8 13h6"></path><path d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z"></path></svg>
                                    3</a>
                            </td>
                            <td>
                                <span class="avatar avatar-sm" style="background-image: url(./static/avatars/001f.jpg)"></span>
                            </td>
                        </tr>
                        </tbody></table>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Invoices</h3>
                </div>
                <div class="card-body border-bottom py-3">
                    <div class="d-flex">
                        <div class="text-secondary">
                            Show
                            <div class="mx-2 d-inline-block">
                                <input type="text" class="form-control form-control-sm" value="8" size="3" aria-label="Invoices count">
                            </div>
                            entries
                        </div>
                        <div class="ms-auto text-secondary">
                            Search:
                            <div class="ms-2 d-inline-block">
                                <input type="text" class="form-control form-control-sm" aria-label="Search invoice">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                        <thead>
                        <tr>
                            <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select all invoices"></th>
                            <th class="w-1">No. <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M6 15l6 -6l6 6"></path></svg>
                            </th>
                            <th>Invoice Subject</th>
                            <th>Client</th>
                            <th>VAT No.</th>
                            <th>Created</th>
                            <th>Status</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                            <td><span class="text-secondary">001401</span></td>
                            <td><a href="invoice.html" class="text-reset" tabindex="-1">Design Works</a></td>
                            <td>
                                <span class="flag flag-xs flag-country-us me-2"></span>
                                Carlson Limited
                            </td>
                            <td>
                                87956621
                            </td>
                            <td>
                                15 Dec 2017
                            </td>
                            <td>
                                <span class="badge bg-success me-1"></span> Paid
                            </td>
                            <td>$887</td>
                            <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                            </td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                            <td><span class="text-secondary">001402</span></td>
                            <td><a href="invoice.html" class="text-reset" tabindex="-1">UX Wireframes</a></td>
                            <td>
                                <span class="flag flag-xs flag-country-gb me-2"></span>
                                Adobe
                            </td>
                            <td>
                                87956421
                            </td>
                            <td>
                                12 Apr 2017
                            </td>
                            <td>
                                <span class="badge bg-warning me-1"></span> Pending
                            </td>
                            <td>$1200</td>
                            <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                            </td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                            <td><span class="text-secondary">001403</span></td>
                            <td><a href="invoice.html" class="text-reset" tabindex="-1">New Dashboard</a></td>
                            <td>
                                <span class="flag flag-xs flag-country-de me-2"></span>
                                Bluewolf
                            </td>
                            <td>
                                87952621
                            </td>
                            <td>
                                23 Oct 2017
                            </td>
                            <td>
                                <span class="badge bg-warning me-1"></span> Pending
                            </td>
                            <td>$534</td>
                            <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                            </td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                            <td><span class="text-secondary">001404</span></td>
                            <td><a href="invoice.html" class="text-reset" tabindex="-1">Landing Page</a></td>
                            <td>
                                <span class="flag flag-xs flag-country-br me-2"></span>
                                Salesforce
                            </td>
                            <td>
                                87953421
                            </td>
                            <td>
                                2 Sep 2017
                            </td>
                            <td>
                                <span class="badge bg-secondary me-1"></span> Due in 2 Weeks
                            </td>
                            <td>$1500</td>
                            <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                            </td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                            <td><span class="text-secondary">001405</span></td>
                            <td><a href="invoice.html" class="text-reset" tabindex="-1">Marketing Templates</a></td>
                            <td>
                                <span class="flag flag-xs flag-country-pl me-2"></span>
                                Printic
                            </td>
                            <td>
                                87956621
                            </td>
                            <td>
                                29 Jan 2018
                            </td>
                            <td>
                                <span class="badge bg-danger me-1"></span> Paid Today
                            </td>
                            <td>$648</td>
                            <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                            </td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                            <td><span class="text-secondary">001406</span></td>
                            <td><a href="invoice.html" class="text-reset" tabindex="-1">Sales Presentation</a></td>
                            <td>
                                <span class="flag flag-xs flag-country-br me-2"></span>
                                Tabdaq
                            </td>
                            <td>
                                87956621
                            </td>
                            <td>
                                4 Feb 2018
                            </td>
                            <td>
                                <span class="badge bg-secondary me-1"></span> Due in 3 Weeks
                            </td>
                            <td>$300</td>
                            <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                            </td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                            <td><span class="text-secondary">001407</span></td>
                            <td><a href="invoice.html" class="text-reset" tabindex="-1">Logo &amp; Print</a></td>
                            <td>
                                <span class="flag flag-xs flag-country-us me-2"></span>
                                Apple
                            </td>
                            <td>
                                87956621
                            </td>
                            <td>
                                22 Mar 2018
                            </td>
                            <td>
                                <span class="badge bg-success me-1"></span> Paid Today
                            </td>
                            <td>$2500</td>
                            <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                            </td>
                        </tr>
                        <tr>
                            <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                            <td><span class="text-secondary">001408</span></td>
                            <td><a href="invoice.html" class="text-reset" tabindex="-1">Icons</a></td>
                            <td>
                                <span class="flag flag-xs flag-country-pl me-2"></span>
                                Tookapic
                            </td>
                            <td>
                                87956621
                            </td>
                            <td>
                                13 May 2018
                            </td>
                            <td>
                                <span class="badge bg-success me-1"></span> Paid Today
                            </td>
                            <td>$940</td>
                            <td class="text-end">
                            <span class="dropdown">
                              <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport" data-bs-toggle="dropdown">Actions</button>
                              <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                  Action
                                </a>
                                <a class="dropdown-item" href="#">
                                  Another action
                                </a>
                              </div>
                            </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer d-flex align-items-center">
                    <p class="m-0 text-secondary">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
                    <ul class="pagination m-0 ms-auto">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                                <!-- Download SVG icon from http://tabler-icons.io/i/chevron-left -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
                                prev
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">
                                next <!-- Download SVG icon from http://tabler-icons.io/i/chevron-right -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
