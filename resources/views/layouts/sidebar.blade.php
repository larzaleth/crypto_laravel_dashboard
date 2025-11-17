<div id="sidebar-wrapper">
    <div class="sidebar-logo">
        <span class="logo-icon">C</span>
    </div>
    
    <div class="list-group list-group-flush">
        
        @php
            $currentRoute = Route::currentRouteName();
        @endphp

        <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action @if($currentRoute == 'dashboard') active @endif">
            <i class="fas fa-chart-line"></i> Dashboard
        </a>
        <a href="{{ route('deposit') }}" class="list-group-item list-group-item-action @if($currentRoute == 'deposit') active @endif">
            <i class="fas fa-wallet"></i> Deposit
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <i class="fas fa-money-bill-transfer"></i> Withdraw
        </a>
        <a href="{{ route('member') }}" class="list-group-item list-group-item-action @if($currentRoute == 'member') active @endif">
            <i class="fas fa-users"></i> Member
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <i class="fas fa-shield-alt"></i> Verification (KYC)
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <i class="fas fa-redo-alt"></i> Reset 2FA Request
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <i class="fas fa-clipboard-list"></i> Daily Report
        </a>
        <a href="#" class="list-group-item list-group-item-action">
            <i class="fas fa-cog"></i> Setting
        </a>
    </div>
</div>