<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
  <div class="app-sidebar__user">
            <div class="dropdown user-pro-body">
              <div>
                <img src="{{asset('assets/images/faces/male/40.jpg')}}" alt="user-img" class="avatar avatar-xl brround mCS_img_loaded">
                <a href="editprofile.html" class="profile-img">
                  <span class="fa fa-pencil" aria-hidden="true"></span>
                </a>
              </div>
              <div class="user-info mb-2">
                <h4 class="font-weight-semibold text-dark mb-1">Mohit Singh</h4>
                <span class="mb-0 text-muted">Ui Designer</span>
              </div>
              <a href="#" title="settings" class="user-button"><i class="fa fa-cog"></i></a>
              <a href="#" title="Comments" class="user-button"><i class="fa fa-comments"></i></a>
              <a href="#" title="logout" class="user-button"><i class="fa fa-power-off"></i></a>
            </div>
          </div>

    <ul class="side-menu">
      <li>
          <a href="{{route('dashboard') }}" class="slide-item">
            <i class="side-menu__icon fa fa-dashboard"></i>
          <span class="side-menu__label">Dashboard</span>
          </a>
      </li>

        <li>
            <a href="{{route('opd-create')}}" class="slide-item" >
              <i class="side-menu__icon fa fa-users" ></i>
            <span class="side-menu__label" >OPD</span>
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
      <a href="{{ route('yoga.create') }} " class="slide-item">
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
      <li class="slide">
          <a class="side-menu__item" data-toggle="slide" href="#">
            <i class="side-menu__icon fa fa-circle-o"></i>
            <span class="side-menu__label">OtherList</span>
            <i class="angle fa fa-angle-right"></i>
          </a>
          <ul class="slide-menu">
              <li>
                <a href="{{route('medicine.create') }}"class="slide-item">medicine</a>
              </li>
              <li>
                <a href="{{route('doctor.create') }}"class="slide-item">docterlist</a>
              </li>
              <li>
                <a href="{{route('potency.create')}}" class="slide-item">Potency</a>
              </li>
              <li>
                <a href="{{route('department.create') }}" class="slide-item">department</a>
              </li>
               <li>
                <a href="{{route('dietPlan.create') }} " class="slide-item">dietPlan</a>
              </li>
               <li>
                <a href="{{route('wardname.create') }}" class="slide-item">wardNO</a>
              </li>
               <li>
                <a href="{{route('yogalist.create')  }}" class="slide-item">yogalist</a>
              </li>
               <li>
                <a href="" class="slide-item">physiotherapylist</a>
              </li> 
               <li>
                <a href="{{route('disease.create') }}" class="slide-item">diseaselist</a>
              </li>
                <li>
                <a href="{{route('phycodisease.create') }}" class="slide-item">phycodiseaselist</a>
              </li>
               <li>
                <a href="{{route('investigation.create') }}" class="slide-item">investigation</a>
              </li>
          </ul>
      </li>

    </ul>
</aside>
