<?php
require_once __DIR__ . '/includes/auth.php';

if (is_logged_in()) {
    redirect('/dashboard.php');
}

$error = handle_login();
$pageTitle = 'Sign In';
require __DIR__ . '/includes/header.php';
?>

<div class="auth-shell flex min-h-screen items-center justify-center p-4">
    <div class="w-full max-w-md">
        <div class="mb-8 text-center">
            <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-brand-500 to-brand-700 text-xl font-bold text-white shadow-lg shadow-brand-600/30">
                <svg class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
            </div>
            <h1 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">Mata Consultancy MIS</h1>
            <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">Management Information System — UAE</p>
        </div>

        <div class="card p-8">
            <h2 class="mb-6 text-lg font-semibold">Sign in to your account</h2>

            <?php if ($error): ?>
            <div class="mb-4 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700 dark:border-red-800 dark:bg-red-950 dark:text-red-200">
                <?= e($error) ?>
            </div>
            <?php endif; ?>

            <form method="POST" class="space-y-4">
                <?= csrf_field() ?>
                <div>
                    <label class="mb-1.5 block text-sm font-medium">Email Address</label>
                    <input type="email" name="email" class="input-field" placeholder="you@company.ae" value="<?= e($_POST['email'] ?? '') ?>" required autofocus>
                </div>
                <div>
                    <label class="mb-1.5 block text-sm font-medium">Password</label>
                    <input type="password" name="password" class="input-field" placeholder="••••••••" required>
                </div>
                <button type="submit" class="btn-primary w-full">Sign In</button>
            </form>

            <p class="mt-6 text-center text-sm text-slate-500 dark:text-slate-400">
                Don't have an account?
                <a href="<?= BASE_URL ?>/register.php" class="font-medium text-brand-600 hover:text-brand-700 dark:text-brand-400">Create one</a>
            </p>
        </div>

        <div class="mt-4 flex items-center justify-center gap-2">
            <button id="theme-toggle" type="button" class="rounded-lg p-2 text-slate-500 hover:bg-white/50 dark:hover:bg-slate-800" title="Toggle theme">
                <svg class="h-5 w-5 hidden dark:block" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                <svg class="h-5 w-5 block dark:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/></svg>
            </button>
        </div>
    </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
