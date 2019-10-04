<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand text-center col-sm-3 col-md-2 mr-0" href="#"><img src="{{asset('images/header_logo.png')}}"></a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
        <a class="nav-link not-hover" href="/admin">Sign out</a>
        </li>
    </ul>
</nav>
<nav class="col-md-2 d-none d-md-block bg-light sidebar" style="background-color:#305573 !important;">
  <div class="sidebar-sticky">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active not-hover" href="#" disabled>
          <span data-feather="users"></span>
          Welcome, Admin <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
          <hr>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin/examlist">
          <span data-feather="list"></span>
          List of Exam
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="file"></span>
          Setup Question
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="clipboard"></span>
          Create Exam
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="code"></span>
          Exam Codes
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="layers"></span>
          Reports
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="users"></span>
          Admin List
        </a>
      </li>
    </ul>
  </div>
</nav>
<script>
  feather.replace()
</script>