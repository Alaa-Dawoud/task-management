<header class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li @class(["nav-item" , ' active' => Route::is('admin.dashboard')])>
                        <a class="nav-link" href="{{route('admin.dashboard')}}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                     viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                     stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0"/>
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"/>
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"/>
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Home
                            </span>
                        </a>
                    </li>
                    <li @class(["nav-item" , ' active' => Route::is('admin.tasks.*')])>
                        <a class="nav-link" href="{{route('admin.tasks.index')}}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="icon icon-tabler icon-tabler-file-invoice" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round"><path stroke="none"
                                                                                        d="M0 0h24v24H0z"
                                                                                        fill="none"/><path
                                    d="M14 3v4a1 1 0 0 0 1 1h4"/><path
                                    d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"/><path
                                    d="M9 7l1 0"/><path d="M9 13l6 0"/><path d="M13 17l2 0"/>
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Tasks
                            </span>
                        </a>
                    </li>
                    <li @class(["nav-item" , ' active' => Route::is('admin.task.sorted')])>
                        <a class="nav-link" href="{{route('admin.task.sorted')}}">
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-forms"
                                     width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                     fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M12 3a3 3 0 0 0 -3 3v12a3 3 0 0 0 3 3"/>
                                    <path d="M6 3a3 3 0 0 1 3 3v12a3 3 0 0 1 -3 3"/>
                                    <path d="M13 7h7a1 1 0 0 1 1 1v8a1 1 0 0 1 -1 1h-7"/>
                                    <path d="M5 7h-1a1 1 0 0 0 -1 1v8a1 1 0 0 0 1 1h1"/>
                                    <path d="M17 12h.01"/>
                                    <path d="M13 12h.01"/>
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Sort Tasks
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
