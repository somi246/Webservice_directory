<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link {{ Request::is('manage/pending') ? ' active' : '' }}" href={{ url('/manage/pending') }}>Pending</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ Request::is('manage/history') ? ' active' : '' }}" href="/manage/history">History</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ Request::is('manage/allusers') ? ' active' : '' }}" href="/manage/allusers">All Users</a>
    </li>
  </ul>
</div>