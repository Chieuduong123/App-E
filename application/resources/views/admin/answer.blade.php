@extends('layouts/aside')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">

        <div class="layout-page">
            <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                id="layout-navbar">
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>
                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <!-- Search -->
                    <form action="" method="GET">
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" name="search" class="form-control border-0 shadow-none"
                                    placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                    </form>
                    <!-- /Search -->
                </div>
            </nav>
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Answers</h4>
                    <div class="card">
                        <h5 class="card-header">Manage Answers</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table" id="myTable2">
                                <thead>
                                    <tr>
                                        <th onclick="sortTable(0)">ID</th>
                                        <th onclick="sortTable(1)">Author</th>
                                        <th onclick="sortTable(2)">Answers</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                @foreach ($answers as $answer)
                                    <tbody class="table-border-bottom-0">
                                        <tr>
                                            <td>{{ $answer->id }}</td>
                                            <td>{{ $answer->users->name }}</td>
                                            <td>{{ $answer->body }}</td>
                                            <td>
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-danger"
                                                    href="{{ route('answers.destroy', $answer->id) }}">Delete</a>
                                            </td>

                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                            <div class="d-flex justify-content-center">
                                {{ $answers->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

    <script>
        function sortTable(n) {
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.getElementById("myTable2");
            switching = true;
            dir = "asc";
            while (switching) {
                switching = false;
                rows = table.rows;
                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName("TD")[n];
                    y = rows[i + 1].getElementsByTagName("TD")[n];
                    if (dir == "asc") {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir == "desc") {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    switchcount++;
                } else {
                    if (switchcount == 0 && dir == "asc") {
                        dir = "desc";
                        switching = true;
                    }
                }
            }
        }
    </script>

    </html>
