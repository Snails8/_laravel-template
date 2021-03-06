<div class="sidebar">
  <div class="sidebar-inner">
    <div class="sidebar-logo bg-dark">
      <div class="peers ai-c fxw-nw">
        <div class="peer peer-greed">
          <a class="sidebar-link td-n" href="">
            <div class="peers ai-c fxw-nw">
              <div class="peer">
                <div class="logo">
                  {{-- <img src="{{ asset('images/logo.png') }}" alt="logo"> --}}
                </div>
              </div>

{{--              <div class="peer peer-greed">--}}
{{--                <h5 class="lh-1 mB-0 logo-text text-white">{{ env('APP_NAME', 'Laravel')}}</h5>--}}
{{--              </div>--}}

            </div>
          </a>
        </div>
        <div class="peer">
          <div class="mobile-toggle sidebar-toggle">
            <a href="" class="td-n">
              <i class="ti-arrow-circle-left"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <ul class="sidebar-menu scrollable pos-r">
      <li class="nav-item mT-20">
        <a class="sidebar-link" href="">
                <span class="icon-holder">
                  <i class="c-blue-500 ti-dashboard"></i>
                </span>
          <span class="title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="dropdown-toggle">
          <span class="icon-holder"><i class="c-orange-500 ti-email"></i></span>
          <span class="title">フォーム管理</span>
          <span class="arrow"><i class="ti-angle-right"></i></span>
        </a>
        <ul class="dropdown-menu">
          <li class="pl-2"><a class='sidebar-link' href="">来店予約</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="sidebar-link" href="">
                <span class="icon-holder">
                  <i class="cH-green-500 ti-hummer"></i>
                </span>
          <span class="title">施工事例管理</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="dropdown-toggle">
          <span class="icon-holder"><i class="c-blue-500 ti-package"></i></span>
          <span class="title">マスター管理</span>
          <span class="arrow"><i class="ti-angle-right"></i></span>
        </a>
        <ul class="dropdown-menu">
          <li class="pl-2"><a class='sidebar-link' href="">施工タグ管理</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>