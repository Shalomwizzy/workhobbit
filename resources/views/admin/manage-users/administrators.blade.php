@extends('layouts.admin')

@section('content')

<div class="container all-users">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box clearfix">
                <div class="top-section clearfix">
                    <div class="top-left">
                        <h2>User List</h2>
                        {{-- <p>Total {{ $administrators->count() }} user accounts</p> --}}
                    </div>
                    <div class="top-right">
                       
                        <a href="{{ route('admin.users.create') }}" class="btn btn-primary ">
                            <i class="fa fa-user"></i> Add User
                            
                        </a>
                    </div>
                </div>
                <div class="bulk-action clearfix top-section">
                   <p>Total {{ $administrators->count() }} user accounts</p>
                    </div>

                    <div class="top-right search-cog">
                        <a href="#" id="settings-icon"><i class="fa fa-cog"></i></a>
                        &nbsp;&nbsp;  &nbsp;&nbsp;
                        <a href="#" id="search-icon"><i class="fa fa-search"></i></a>
                        <div id="search-box" class="search-box-hidden">
                            <form action="{{ route('user.search') }}" method="GET" class="d-flex">
                                <input type="text" name="search" class="form-control me-2" placeholder="Search...">
                                <button type="submit" class="btn btn-primary">Search</button>
                            </form>
                        </div>
                    </div>

                    
                    
                    
                    

                    
                    
                    
                </div>
                <div class="table-responsive">
                    <table class="table user-list">
                        <thead>
                            <tr>
                                <th><span>User</span></th>
                                <th><span>Created</span></th>
                                <th class="text-center"><span>Status</span></th>
                                <th><span>Email</span></th>
                                <th><span>Actions</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($administrators as $key => $administrator) 
                                
                        
                            <tr>
                                
                                <td>
                                   
                                    <div>
                                        <a href="#">
                                         
                                            <div class="user-avatar" style="background-color: {{ [
                                                'blue', 'green', 'red', 'orange', 'yellow', 'purple', 'pink', 'teal', 'cyan', 'magenta',
                                                'maroon', 'navy', 'olive', 'lime', 'aqua', 'fuchsia', 'silver', 'gray', 'black',
                                                'darkblue', 'darkcyan', 'darkgoldenrod', 'darkgray', 'darkgreen', 'darkkhaki', 'darkmagenta',
                                                'darkolivegreen', 'darkorange', 'darkorchid', 'darkred', 'darksalmon', 'darkseagreen', 'darkslateblue',
                                                'darkslategray', 'darkturquoise', 'darkviolet', 'deeppink', 'deepskyblue', 'dimgray', 'dodgerblue',
                                                'firebrick', 'forestgreen', 'gold', 'hotpink', 'indianred', 'indigo', 'lawngreen'
                                            ][$key % 50] }}">
                                                @if ($administrator->jobApplication)
                                                    {{ strtoupper(substr($administrator->jobApplication->first_name, 0, 1)) }}{{ strtoupper(substr($administrator->jobApplication->last_name, 0, 1)) }}
                                                @else
                                                    {{ strtoupper(substr(explode('@', $administrator->email)[0], 0, 2)) }}
                                                @endif
                                            </div>
                                        </a>
                                    </div>
                                    

                                   
                                    
                                    <div class="user-details">
                                        <div class="user-name">
                                            @if ($administrator->jobApplication)
                                                <a class="user-link first-last">{{ $administrator->jobApplication->first_name }} {{ $administrator->jobApplication->last_name }}</a>
                                            @else
                                                <span class="user-link">No job application</span>
                                            @endif
                                        </div>
                                        <div class="user-role">
                                            {{ $administrator->role }}
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    @if($administrator->created_at)
                                        {{ $administrator->created_at->format('Y/m/d') }}
                                    @else
                                        null
                                    @endif
                                </td>
                                <td class="text-center">
                                    <span class="label {{ $administrator->status === 'active' ? 'label-success' : 'label-danger' }}" style="text-transform: capitalize;">
                                        {{ $administrator->status }}
                                    </span>
                                </td>
                                
                                
                                <td class="email">
                                    <span>{{ $administrator->email }}</span>
                                </td>
                                
                                <td style="width: 20%;" class="table-icons">
                                    <div class="btn-group">

                                        <a href="{{ route('admin.user-details', ['userId' => $administrator->id]) }}" class="table-link" title="View Profile">
                                            <span class="fa-stack">
                                                <i class="fa-solid fa-eye"></i>
                                            </span>
                                        </a>
                                       
                                
                                        <a href="{{ route('send-email', ['userId' => $administrator->id]) }}" class="table-link" title="Send Email">
                                            <span class="fa-stack">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                        </a>
                                        
                                        
                                        
                                        

                                        
                                        
                                        
                                        <form id="suspend-form-{{ $administrator->id }}" 
                                            action="{{ route('admin.users.suspend', $administrator) }}"
                                            method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                        
                                        <!-- Activation Form -->
                                        <form id="activate-form-{{ $administrator->id }}" 
                                            action="{{ route('admin.users.activate', $administrator) }}"
                                            method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                        
                                        <!-- User Action Link -->
                                        <a href="#"
                                        class="table-link"
                                        title="{{ $administrator->status === 'active' ? 'Suspend User' : 'Activate User' }}"
                                        onclick="event.preventDefault(); document.getElementById('{{ $administrator->status === 'active' ? 'suspend' : 'activate' }}-form-{{ $administrator->id }}').submit();">
                                        <span class="fa-stack">
                                            @if ($administrator->status === 'active')
                                                <i class="fa-solid fa-user-xmark"></i> <!-- Displayed when user is active -->
                                            @else
                                                <i class="fa-solid fa-user-check"></i> <!-- Displayed when user is suspended -->
                                            @endif
                                        </span>
                                        </a>
                                         

                                      
                                         
                                         
                                        
                                        
                                        
                                
                                        <div class="dropdown dropstart dropupup"> <!-- Add the dropup class here -->
                                            <button class="btn btn-dots" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg width="25" height="25" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16"  >
                                                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                                </svg>
                                            </button>
                                            <ul class="dropdown-menu dropupup-menu">
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('admin.user-details', ['userId' => $administrator->id]) }}">
                                                        <i class="fa-solid fa-eye"></i>  &nbsp; View Application
                                                    </a>
                                                </li>

                                               
                                                
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('send-email', ['userId' => $administrator->id]) }}">
                                                        <i class="fa-solid fa-envelope"></i> &nbsp; Send Email

                                                    </a>
                                                
                                                </li>

                                               

                                               

                                                <li>
                                                    <form id="send-reset-link-form-{{ $administrator->id }}" 
                                                        action="{{ route('admin.users.send-reset-link', $administrator) }}"
                                                        method="POST"
                                                        style="display: none;">
                                                        @csrf
                                                    </form>
                                                    
                                                    <a href="#"
                                                        class="dropdown-item"
                                                        title="Send Reset Link"
                                                        onclick="event.preventDefault(); document.getElementById('send-reset-link-form-{{ $administrator->id }}').submit();">
                                                        <i class="fa-solid fa-lock"></i> &nbsp;Reset Password
                                                    </a>
                                                
                                                </li>

                                                <li>

                                                    <form id="suspend-form-{{ $administrator->id }}" 
                                                        action="{{ route('admin.users.suspend', $administrator) }}"
                                                        method="POST"
                                                        style="display: none;">
                                                        @csrf
                                                    </form>
                                                    
                                                    <!-- Activation Form -->
                                                    <form id="activate-form-{{ $administrator->id }}" 
                                                        action="{{ route('admin.users.activate', $administrator) }}"
                                                        method="POST"
                                                        style="display: none;">
                                                        @csrf
                                                    </form>
                                                    <a class="dropdown-item" href="#"     title="{{ $administrator->status === 'active' ? 'Suspend User' : 'Activate User' }}"
                                                        onclick="event.preventDefault(); document.getElementById('{{ $administrator->status === 'active' ? 'suspend' : 'activate' }}-form-{{ $administrator->id }}').submit();">
                                                        <span class="fa-stack">
                                                            @if ($administrator->status === 'active')
                                                                <i class="fa-solid fa-user-xmark"></i> 
                                                                Suspende
                                                            @else
                                                                <i class="fa-solid fa-user-check"></i> 
                                                                Activate
                                                            @endif
                                                        </span>
                                                    </a>
                                                
                                                </li>


                                               
                                                
                                                
                                                
                                                



                                                <li>
                                                    <form id="delete-user-form-{{ $administrator->id }}" 
                                                        action="{{ route('admin.users.destroy', $administrator) }}"
                                                        method="POST"
                                                        style="display: none;">
                                                        @csrf
                                                        @method('DELETE')
                                                    </form>
                                                    
                                                    <a href="#"
                                                        class="dropdown-item"
                                                        title="Delete User"
                                                        onclick="event.preventDefault(); if (confirm('Are you sure you want to delete this user?')) { document.getElementById('delete-user-form-{{ $administrator->id }}').submit(); }">
                                                        <i class="fa-regular fa-trash-can"></i> &nbsp; Delete User
                                                    </a>
                                                    
                                                
                                                </li>
                                              </ul>
                                            
                                        </div>
                                    </div>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </a>
                </div>
                {{ $administrators->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
   
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"/>





<script>
    document.addEventListener("DOMContentLoaded", function() {
    const searchIcon = document.getElementById('search-icon');
    const searchBox = document.getElementById('search-box');

    // Toggle search box visibility when search icon is clicked
    searchIcon.addEventListener('click', function(event) {
        event.preventDefault();
        searchBox.classList.toggle('search-box-hidden');
    });
});



</script>
@endsection










