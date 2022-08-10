@extends('layouts.app')

@section('content')
<div class="px-1">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <h5 class="card-header">Avaliable Students</h5>
                <div class="table-responsive ">
                    <table class="table">
                        <caption class="ms-4">List of Students</caption>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Age</th>
                                <th>Region</th>
                                <th>Mobile</th>
                                <th>Job</th>
                                <th>Badge NO</th>
                                <th>Video</th>
                                <th>Picture</th>
                                <th>Poster</th>
                                <th>Article</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($students->count())
                            @foreach ($students as $student)
                            <tr class="@if ($student->trashed()) d-none table-danger @endif">
                                <td>{{ $student->id }}</td>
                                <td><strong>{{ $student->name }}</strong></td>
                                <td><strong><a href="mailto:{{ $student->email }}">{{ $student->email }}</a></strong></td>
                                <td><strong>{{ $student->gender }}</strong></td>
                                <td><strong>{{ $student->age }}</strong></td>
                                <td><strong>{{ $student->region }}</strong></td>
                                <td><strong>{{ $student->mobile }}</strong></td>
                                <td><strong>{{ $student->job }}</strong></td>
                                <td><strong>{{ $student->id_card }}</strong></td>
                                <td>
                                    <div class="avatar-wrapper">
                                        <div class="avatar avatar-sm me-3">
                                            <a href="{{ secure_asset('uploads/videos/' . $student->video) }}" target="_blank" rel="noopener noreferrer">
                                                {{ $student->video}}
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-wrapper">
                                        <div class="avatar avatar-sm me-3">
                                            <a href="{{ secure_asset('uploads/pictures/' . $student->picture) }}" target="_blank" rel="noopener noreferrer">
                                                @if ($student->picture)
                                                <img style="width: 50px;height: 50px;" src="{{ secure_asset('uploads/pictures/' . $student->picture) }}" alt="Avatar" class="rounded-circle">
                                                @endif
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-wrapper">
                                        <div class="avatar avatar-sm me-3">
                                            <a href="{{ secure_asset('uploads/posters/' . $student->poster) }}" target="_blank" rel="noopener noreferrer">
                                                {{ $student->poster }}
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-wrapper">
                                        <div class="avatar avatar-sm me-3">
                                            <a href="{{ secure_asset('uploads/articles/' . $student->article) }}" target="_blank" rel="noopener noreferrer">
                                                {{$student->article }}
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a class="dropdown-item deleteBtn" data-model-type="Class" data-action-type="{{ route('destroy', $student->id) }}" data-bs-toggle="modal" data-id="{{ $student->id }}" href="#deleteModal" role="button" aria-expanded="false">
                                        <i class="fa fa-trash fs-3"></i>
                                    </a>
                                </td>

                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="20" class="text-center p-5 bg-secondary text-white">
                                    <p>There are no Students yet !</p>
                                </td>
                            </tr>
                            @endif


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="deleteModal" class="modal fade deleteModal">
        <form action="" id="deleteForm" method="post">
            @csrf
            @method("delete")
            <div class="modal-dialog modal-confirm">
                <div class="modal-content">
                    <div class="modal-header flex-column">
                        <div class="icon-box">
                            <i class="fa fa-trash-alt"></i>
                        </div>
                        <h4 class="modal-title w-100">Are you sure?</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to delete this <span id="DeleteName"></span> ? This process cannot be
                            undone.</p>
                    </div>
                    <input type="hidden" name="id" value="" id="deleteModelId">
                    <div class="modal-footer justify-content-center">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    
    <script>
        $(document).ready(function() {

            $('.deleteBtn').on('click', function(e) {
                $("#deleteModelId").val($(this).attr('data-id'));
                $("#deleteForm").attr('action', ($(this).attr('data-action-type')));
                $("#DeleteName").text(($(this).attr('data-model-type')));

            });
        });
    </script>

    @endsection