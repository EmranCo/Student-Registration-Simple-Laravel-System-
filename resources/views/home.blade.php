@extends('layouts.app')

@section('content')
<div class="container">
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
                                            <a href="{{ asset('uploads/videos/' . $student->video) }}" target="_blank" rel="noopener noreferrer">
                                                {{ $student->video}}
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-wrapper">
                                        <div class="avatar avatar-sm me-3">
                                            <a href="{{ asset('uploads/pictures/' . $student->picture) }}" target="_blank" rel="noopener noreferrer">
                                            @if ($student->picture)
                                            <img style="width: 50px;height: 50px;" src="{{ asset('uploads/pictures/' . $student->picture) }}" alt="Avatar" class="rounded-circle">    
                                            @endif    
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-wrapper">
                                        <div class="avatar avatar-sm me-3">
                                            <a href="{{ asset('uploads/posters/' . $student->poster) }}" target="_blank" rel="noopener noreferrer">
                                                {{ $student->poster }}
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar-wrapper">
                                        <div class="avatar avatar-sm me-3">
                                            <a href="{{ asset('uploads/articles/' . $student->article) }}" target="_blank" rel="noopener noreferrer">
                                                {{$student->article }}
                                            </a>
                                        </div>
                                    </div>
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
    @endsection