<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="adminHMD professional admin dashboard template">
  <title><h1 class="h3 mb-1">Ajebo Plush Bites</h1></title>
  <p class="text-muted mb-0">Restaurant Management & Reservation control Desk.</p>

  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
  <div class="admin-shell">
    <div class="sidebar-backdrop" data-sidebar-close></div>

    <aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
      <div class="sidebar-header">
        <a class="brand-mark" href="index.html" aria-label="adminHMD dashboard">
          <span class="brand-icon"><i class="bi bi-egg-fried" aria-hidden="true"></i></span>
          <span class="brand-copy">
           <h1 class="h3 mb-1">Ajebo Plush Bites</h1>
        <p class="text-muted mb-0">Restaurant Management & Contact control Desk.</p>
          </span>
        </a>
      </div>

      <nav class="sidebar-nav">
        <a class="nav-link" href="/admin/dashboard">
          <span class="nav-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
          <span class="nav-text">Dashboard</span>
        </a>
        <a class="nav-link " href="/admin/reservations" aria-current="page">
          <span class="nav-icon"><i class="bi bi-calendar-check" aria-hidden="true"></i></span>
          <span class="nav-text">Reservations</span>
        </a>
        <a class="nav-link" href="/admin/contacts">
          <span class="nav-icon"><i class="bi bi-phone" aria-hidden="true"></i></span>
          <span class="nav-text"> Contacts</span>
        </a>
        <a class="nav-link" href="profile.html">
          <span class="nav-icon"><i class="bi bi-person-badge" aria-hidden="true"></i></span>
          <span class="nav-text">Profile</span>
        </a>
        <a class="nav-link" href="charts.html">
          <span class="nav-icon"><i class="bi bi-bar-chart-line" aria-hidden="true"></i></span>
          <span class="nav-text">Charts</span>
        </a>
        <a class="nav-link active" href="tables.html" aria-current="page">
          <span class="nav-icon"><i class="bi bi-table" aria-hidden="true"></i></span>
          <span class="nav-text">Tables</span>
        </a>
        <a class="nav-link" href="forms.html">
          <span class="nav-icon"><i class="bi bi-ui-checks-grid" aria-hidden="true"></i></span>
          <span class="nav-text">Forms</span>
        </a>
        <a class="nav-link" href="components.html">
          <span class="nav-icon"><i class="bi bi-grid-3x3-gap" aria-hidden="true"></i></span>
          <span class="nav-text">Components</span>
        </a>
        <a class="nav-link" href="alerts.html">
          <span class="nav-icon"><i class="bi bi-exclamation-triangle" aria-hidden="true"></i></span>
          <span class="nav-text">Alerts</span>
        </a>
        <a class="nav-link" href="modals.html">
          <span class="nav-icon"><i class="bi bi-window-stack" aria-hidden="true"></i></span>
          <span class="nav-text">Modals</span>
        </a>
        <a class="nav-link" href="settings.html">
          <span class="nav-icon"><i class="bi bi-gear" aria-hidden="true"></i></span>
          <span class="nav-text">Settings</span>
        </a>
        <a class="nav-link" href="blank.html">
          <span class="nav-icon"><i class="bi bi-file-earmark" aria-hidden="true"></i></span>
          <span class="nav-text">Blank Page</span>
        </a>
      </nav>

      

      <div class="sidebar-footer">
        <span class="status-dot"></span>
        <span class="sidebar-footer-text">System running smoothly</span>
      </div>
    </aside>

    <div class="admin-main">
      <nav class="navbar admin-navbar navbar-expand bg-white">
        <div class="container-fluid px-3 px-lg-4">
          <button class="sidebar-toggle" type="button" data-sidebar-toggle aria-controls="adminSidebar" aria-expanded="true" aria-label="Toggle sidebar">
            <span></span>
            <span></span>
            <span></span>
          </button>

          <form class="d-none d-md-flex ms-3 flex-grow-1" role="search">
            <input class="form-control search-input" type="search" placeholder="Search users, orders, reports" aria-label="Search">
          </form>

          <div class="navbar-actions ms-auto">
            <button class="icon-button theme-toggle" type="button" data-theme-toggle aria-label="Switch color theme" title="Switch color theme">
              <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
            </button>
            <div class="dropdown">
              <button class="icon-button" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Notifications">
                <span class="notification-dot"></span>
                <i class="bi bi-bell" aria-hidden="true"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end notification-menu">
                <div class="dropdown-header fw-bold text-body">Notifications</div>
                <a class="dropdown-item" href="/admin/contacts">
                  <span class="notification-title">New Message</span>
                  <span class="notification-time">4 minutes ago</span>
                </a>
                <a class="dropdown-item" href="charts.html">
                  <span class="notification-title">Revenue target reached</span>
                  <span class="notification-time">32 minutes ago</span>
                </a>
                <a class="dropdown-item" href="settings.html">
                  <span class="notification-title">Security review completed</span>
                  <span class="notification-time">1 hour ago</span>
                </a>
              </div>
            </div>

            <div class="dropdown">
              <button class="profile-button dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="avatar-img avatar-sm" src="../assets/images/avatar/avatar.jpg" alt="Admin Hasan">
                <span class="profile-name d-none d-sm-inline">Admin Hasan</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                <li><a class="dropdown-item" href="settings.html">Account settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form method="POST" action="{{route('logout')}}">
                    @csrf 
                    <a class="dropdown-item" href="{{route('logout')}}"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">Sign Out</a>
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      <main class="dashboard-content">
        <div class="container-fluid px-3 px-lg-4 py-4">
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-phone" aria-hidden="true"></i></span>
             
              <div>
                <p class="eyebrow mb-1"></p>
               
              <h2 style="background: black; color:white;font-size:2rem; align-items:center;font-weight:600;font-family:'Courgette',cursive;">
                Contacts
              </h2>
              </div>
            </div>
            
          </div>

          <section class="panel">
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead style="color:black">
                  <tr>
                    
                    <th>Id</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Recieved</th>
                    <th>Action</th>
                  
                  </tr>
                </thead>
                <tbody>
                  @forelse($contacts as $contact )
                  <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->phone }}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->subject}}</td>
                    <td>{{Str::Limit($contact->message, 50)}}</td>
                    <td>{{$contact->created_at->diffForHumans()}}</td>
                    <td>
                      <button class="btn btn-primary btn-sm"
                      data-bs-toggle="modal"data-bs-target="#msg{{$contact->id}}">
                    View</button>
                    </td>
                  </tr>
                  <div class="modal-fade" id="msg{{$contact->id}}" tabindex="-1">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Message from {{$contact->name}}</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal">

                          </button>
                          <a href="mailto:{{$contact->email}}?subject=Re:
                           {{urlencode($contact->subject)}}"class="btn btn-warning">
                           Reply
                          </a>
                        </div>
                        <div class="modal-body">
                          <p><strong>Email:</strong>{{$contact->email}}</p>
                          <p><strong>Phone:</strong>{{$contact->phone }}</p>
                          <p><strong>Subject:</strong>{{$contact->subject}}</p>
                          
                          <p>{{$contact->message}}</p>
                          <hr>
                          
                        </div>
                        <div class="modal-footer">
                          

                        </div>
                      </div>
                    </div>

                  </div>
                  @empty 
                  <tr>
                    <td colspan="8" class="text-center">
                      No Message yet 
                    </td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
            
            
            </tbody></table></div>
          </section>
        </div>
      </main>

      <footer class="admin-footer">
        <div class="container-fluid px-3 px-lg-4">

        </div>
      </footer>
    </div>
  </div>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>
