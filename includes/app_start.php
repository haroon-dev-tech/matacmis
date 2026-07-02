<div class="app-shell flex h-full min-h-screen">
    <aside id="sidebar" class="sidebar fixed inset-y-0 left-0 z-40 flex w-[17.5rem] -translate-x-full flex-col transition-transform duration-300 ease-out lg:static lg:translate-x-0">
        <div class="sidebar-brand">
            <div class="sidebar-brand-mark">
                <svg class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                </svg>
            </div>
            <div class="min-w-0">
                <p class="truncate text-sm font-semibold tracking-tight text-white">Mata Consultancy</p>
                <p class="truncate text-[11px] font-medium uppercase tracking-wider text-slate-400">Management System</p>
            </div>
        </div>

        <nav class="sidebar-nav flex-1 overflow-y-auto px-3 py-5">
            <p class="nav-section-label">Overview</p>
            <a href="<?= BASE_URL ?>/dashboard.php" class="nav-link <?= $activeNav === 'dashboard' ? 'active' : '' ?>">
                <span class="nav-link-icon">
                    <svg class="h-[18px] w-[18px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                </span>
                <span>Dashboard</span>
            </a>

            <p class="nav-section-label mt-6">Management</p>
            <a href="<?= BASE_URL ?>/companies/index.php" class="nav-link <?= $activeNav === 'companies' ? 'active' : '' ?>">
                <span class="nav-link-icon">
                    <svg class="h-[18px] w-[18px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                </span>
                <span>Companies</span>
            </a>

            <p class="nav-section-label mt-6">Financial Reports</p>
            <a href="<?= BASE_URL ?>/somfp/index.php" class="nav-link <?= $activeNav === 'somfp' ? 'active' : '' ?>">
                <span class="nav-link-icon">
                    <svg class="h-[18px] w-[18px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </span>
                <span>SOMFP</span>
                <span class="nav-link-badge">Monthly</span>
            </a>
            <a href="<?= BASE_URL ?>/sofp/index.php" class="nav-link <?= $activeNav === 'sofp' ? 'active' : '' ?>">
                <span class="nav-link-icon">
                    <svg class="h-[18px] w-[18px]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M3 14h18M5 6h14a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2z"/></svg>
                </span>
                <span>SOFP</span>
                <span class="nav-link-badge">Overall</span>
            </a>
        </nav>

        <div class="sidebar-footer">
            <div class="sidebar-user-card">
                <div class="sidebar-avatar">
                    <?= e(strtoupper(substr($currentUser['full_name'], 0, 1))) ?>
                </div>
                <div class="min-w-0 flex-1">
                    <p class="truncate text-sm font-semibold text-white"><?= e($currentUser['full_name']) ?></p>
                    <p class="truncate text-xs text-slate-400"><?= e($currentUser['email']) ?></p>
                </div>
            </div>
            <a href="<?= BASE_URL ?>/logout.php" class="sidebar-signout">
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                Sign Out
            </a>
        </div>
    </aside>

    <div id="sidebar-overlay" class="sidebar-overlay fixed inset-0 z-30 hidden lg:hidden"></div>

    <div class="flex min-w-0 flex-1 flex-col">
        <header class="app-header sticky top-0 z-20">
            <div class="flex items-center gap-3">
                <button id="sidebar-toggle" type="button" class="icon-btn lg:hidden" aria-label="Open menu">
                    <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/></svg>
                </button>
                <div>
                    <p class="text-xs font-medium uppercase tracking-wider text-slate-500 dark:text-slate-400"><?= e(APP_SHORT) ?></p>
                    <h1 class="text-lg font-semibold tracking-tight text-slate-900 dark:text-white"><?= e($pageTitle) ?></h1>
                </div>
            </div>
            <button id="theme-toggle" type="button" class="icon-btn" title="Toggle theme" aria-label="Toggle theme">
                <svg class="h-5 w-5 hidden dark:block" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                <svg class="h-5 w-5 block dark:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
            </button>
        </header>

        <main class="app-main flex-1 overflow-y-auto">
            <?php if ($flash): ?>
            <div class="flash-message <?= $flash['type'] === 'success' ? 'flash-success' : 'flash-error' ?>">
                <?php if ($flash['type'] === 'success'): ?>
                <svg class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <?php else: ?>
                <svg class="h-5 w-5 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.75"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <?php endif; ?>
                <?= e($flash['message']) ?>
            </div>
            <?php endif; ?>
