<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">

    <ul class="side-menu">
      <li>
          <a href="" class="slide-item">
            <i class="side-menu__icon fa fa-dashboard"></i>
          <span class="side-menu__label">Dashboard</span>
          </a>
      </li>

        <li>
            <a href="{{route('opd-create')}}" class="slide-item">
              <i class="side-menu__icon fa fa-users"></i>
            <span class="side-menu__label">OPD</span>
            </a>
        </li>

      </li>
      <li>
          <a href="{{ route('ipd-create') }} " class="slide-item">
          <i class="side-menu__icon fa fa-check"></i>
          <span class="side-menu__label">IPD</span>
          </a>
      </li>
      <li>
          <a href="{{route('ot-create')}} " class="slide-item">
            <i class="side-menu__icon fa fa fa-check"></i>
          <span class="side-menu__label">OT</span>
          </a>
      </li>
      <li class="slide">
          <a class="side-menu__item" data-toggle="slide" href="#">
            <i class="side-menu__icon fa fa-circle-o"></i>
            <span class="side-menu__label">Test Reports</span>
            <i class="angle fa fa-angle-right"></i>
          </a>
          <ul class="slide-menu">
              <li>
                <a href="{{ route('blood-create') }}" class="slide-item">Blood Examination</a>
              </li>
              <li>
                <a href="{{ route('generalblood-create') }}" class="slide-item">General Blood</a>
              </li>
              <li>
                <a href="{{ route('semen-create') }}" class="slide-item">Semen Exaination</a>
              </li>
              <li>
                <a href="{{ route('serun-create') }}" class="slide-item">Serun of widal</a>
              </li>
              <li>
                <a href="{{ route('stool-create') }}" class="slide-item">Stool Examination </a>
              </li>
              <li>
                <a href="{{ route('urine-create') }}" class="slide-item">Urin Examination</a>
              </li>
              <li>
                <a href="{{ route('xray-create') }}" class="slide-item">X-Ray</a>
              </li>
              <li>
                <a href="{{ route('ecg-create') }}" class="slide-item">ECG</a>
              </li>
          </ul>
      </li>
      <li>
        <a href="{{ route('physiotherpy-create') }} " class="slide-item">
          <i class="side-menu__icon fa fa-list"></i>
        <span class="side-menu__label">Physiotherpy</span>
        </a>
    </li>
    <li>
      <a href="{{ route('yoga-create') }} " class="slide-item">
        <i class="side-menu__icon fa fa-list"></i>
      <span class="side-menu__label">Yoga</span>
      </a>
  </li>
      <li class="slide">
          <a class="side-menu__item" data-toggle="slide" href="#">
            <i class="side-menu__icon fa fa-circle-o"></i>
            <span class="side-menu__label">Reports</span>
            <i class="angle fa fa-angle-right"></i>
          </a>
          <ul class="slide-menu">
              <li>
                <a href=""class="slide-item">OPD Date Wise</a>
              </li>
              <li>
                <a href=" "class="slide-item">OPD Month Wise</a>
              </li>
              <li>
                <a href="" class="slide-item">OPD Report</a>
              </li>
              <li>
                <a href=" "class="slide-item">IPD Date Wise</a>
              </li>
              <li>
                <a href="" class="slide-item">IPD Month  Wise</a>
              </li>
              <li>
                <a href="" class="slide-item">OPD Treatment List</a>
              </li>
              <li>
                <a href=" "class="slide-item">X-Ray Reports</a>
              </li>
              <li>
                <a href=""class="slide-item">Blood Examination Report</a>
              </li>
              <li>
                <a href="" class="slide-item">General blood Report</a>
              </li>
              <li>
                <a href="" class="slide-item">Semen Examination Report</a>
              </li>
              <li>
                <a href="" class="slide-item">Serum of widal Report</a>
              </li>
              <li>
                <a href="" class="slide-item">Stool Examination Report</a>
              </li>
              <li>
                <a href="" class="slide-item">Urine Examination Report</a>
              </li>
              <li>
                <a href="" class="slide-item">ECG Report</a>
              </li>
              <li>
                <a href="" class="slide-item">Physiotherpy Report</a>
              </li>
              <li>
                <a href="" class="slide-item">Yoga Report</a>
              </li>

          </ul>
      </li>
      <li>
      <a href="" class="slide-item">
        <i class="side-menu__icon fa fa-list"></i>
      <span class="side-menu__label">Patient History</span>
      </a>
    </li>

    </ul>
</aside>
