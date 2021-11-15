@extends('back-office.layouts.app_admin')
@section('content')
    <div class="modal fade" id="deleteModeratorModal" tabindex="-1" aria-labelledby="deleteModeratorModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sure to delete <span id="name"></span> ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">NO</button>
                    <button type="button" class="btn btn-danger">Yes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="approuveModeratorModal" tabindex="-1" aria-labelledby="approuveModeratorModal" aria-hidden="true">
        <form id="formApprouve" method="GET"  >
            @csrf
            @method('POST')

            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Sure to approuve this place:  <span id="name"></span> ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">NO</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        @if($approuved == true && $declined == false)
            <h1 class="h2">Places recently Approuved</h1>
        @elseif($approuved == false && $declined == true)
            <h1 class="h2">Places were Declined</h1>
        @elseif($approuved == false && $declined == false)
            <h1 class="h2">Places newly Added</h1>
        @endif
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>
    <table class="table table-striped moderators">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Add by</th>
            <th scope="col">Desactivate</th>
            <th scope="col">Approuve</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($datas as $data)
            <tr>
                <th scope="row">{{ $data->id }}</th>
                <td>{{ $data->name }}</td>
                <td>{{ $data->guide->pseudo }}</td>
                <td>
                    <a href="#"
                       id="toDelete"
                       class="btn btn-danger"
                       data-bs-toggle="modal" data-bs-target="#deleteModeratorModal"
                       data-name="{{ $data->name }}"
                    >Deactivate</a>
                </td>
                <td>
                    <a href="#"
                       id="toApprouve"
                       class="btn btn-success"
                       data-bs-toggle="modal" data-bs-target="#approuveModeratorModal"
                       data-name="{{ $data->name }}"
                       data-action="{{ route('admin.places.index.approuve', [($data->id), (Auth::guard('admin')->user()->id)] ) }}"
                    >Approuve</a>
                </td>
            </tr>
        @endforeach
        </tbody>
        {{ Auth::guard('admin')->user()->id }}
    </table>
@endsection
@section('js')
    <script >
           $(document).ready(function () {
                var $approuveModeratorModal = $('#approuveModeratorModal')
                var $formApprouve = $('#formApprouve');
                var $table = $("table").find("tr")
                var $approuve = $table.find("#toApprouve")
                $approuve.each(function(){
                    $(this).click(function(){
                        var action = $(this).data('action')
                        var name = $(this).data('name')
                        $formApprouve.attr('action', action)
                        $approuveModeratorModal.find("#name").val(name)
                    })
                })
            });
    </script>
@endsection
