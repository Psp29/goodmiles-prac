@extends('layouts.master')

@section('title', 'Notifications')

@section('content')

    <div class="kt-portlet kt-portlet--mobile">
        <div class="kt-portlet__head kt-portlet__head--lg">
            <div class="kt-portlet__head-label">
                <span class="kt-portlet__head-icon">
                    <i class="kt-font-brand flaticon2-indent-dots"></i>
                </span>
                <h3 class="kt-portlet__head-title">
                    {{'Notification List' }}
                </h3>
            </div>

        </div>

        <div class="kt-portlet__body">
            <div class="row input-daterange">
                <div class="col-md-4">
                    <input type="text" data-filter="from_date" id="from_date_range" class="form-control"
                        placeholder="{{ __('common.from_date') }}" readonly />
                </div>
                <div class="col-md-4">
                    <input type="text" data-filter="to_date" id="to_date_range" class="form-control"
                        placeholder="{{ __('common.to_date') }}" readonly />
                </div>
                <div class="col-md-4">
                    <button type="button" name="filter" id="filter"
                        class="btn btn-filter">{{ __('common.filter_button') }}</button>
                    <button type="button" name="refresh" id="filter-reset"
                        class="btn btn-reset">{{ __('common.reset_button') }}</button>
                </div>
            </div>
            <div class="kt-portlet__body">
                <table class="table table-striped- table-bordered table-hover table-checkable data-table" id="data-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Created Date</th>
                            <th>{{ __('common.table.title') }}</th>
                            <th>{{ __('common.table.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        var deleteRoute = '{{ route('farmer.destroy', ':id') }}';
        const dtable = $('#data-table').DataTable({
            "language": {
                paginate: {
                    'first': @json(__('common.datatable.general.paginate.first')),
                    'last': @json(__('common.datatable.general.paginate.last')),
                },
                emptyTable: @json(__('common.datatable.general.emptyTable')),
                info: @json(__('common.datatable.general.info')),
                infoEmpty: @json(__('common.datatable.general.infoEmpty')),
                infoFiltered: @json(__('common.datatable.general.infoFiltered')),
                loadingRecords: @json(__('common.datatable.general.loadingRecords')),
                processin: @json(__('common.datatable.general.processing')),
                zeroRecords: @json(__('common.datatable.general.zeroRecords')),
                lengthMenu: @json(__('common.datatable.general.lengthMenu')),
                search: @json(__('common.datatable.general.search')),
            },
            responsive: true,
            processing: true,
            serverSide: true,
            order: [
                [1, "desc"]
            ],
            pageLength: 25,
            ajax: {
                url: "{{ route('notifications.index') }}",
                data: function(d) {
                    $("[data-filter]").each(function() {
                        d[this.dataset.filter] = this.value;
                    });
                    return d;
                }
            },
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'created_at',
                    name: 'created_at'
                },
                {
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },

            ]
        });

        $('#filter').on('click', function(e) {
            let d = {};
            $("[data-filter]").each(function() {
                d[this.dataset.filter] = this.value;
            });
            dtable.draw();
            e.preventDefault();
        });

        $('#filter-reset').on('click', function(e) {
            $("[data-filter]").each(function() {
                this.value = "";
            });
            dtable.draw();
            e.preventDefault();
        });

        $(document).on('click', 'span.status', function(e) {
            e.preventDefault();

            let url = "{{ route('farmers.status') }}";
            let status = $(this).attr('data-status');
            let id = $(this).attr('data-id');

            Swal.fire({
                    title: "{{ __('common.delete_popup.title') }}",
                    text: "{{ __('common.delete_popup.text') }}",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "{{ __('common.delete_popup.confirm_button') }}",
                    cancelButtonText: "{{ __('common.delete_popup.cancel_button') }}",
                })
                .then(function(res) {
                    if (res.value) {
                        $.ajax({
                            url: url,
                            method: 'POST',
                            data: {
                                _token: "{{ csrf_token() }}",
                                status: status,
                                id: id,
                            },
                            success: function(res) {
                                console.warn(res);
                                if (res.status) {
                                    Swal.fire({
                                        type: 'success',
                                        text: res.msg,
                                    });

                                    let table = $('#data-table').DataTable();

                                    setTimeout(function() {
                                        table.draw();
                                    }, 500);
                                } else {
                                    Swal.fire({
                                        type: 'error',
                                        text: res.msg,
                                    })
                                }
                            }
                        });
                    }
                });

            return false;
        });

        $('#filter').on('click', function(e) {
            let d = {};
            $("[data-filter]").each(function() {
                d[this.dataset.filter] = this.value;
            });
            dtable.draw();
            e.preventDefault();
        });

        $(document).on('click', '.deleteFarmer', function(event) {
            event.preventDefault();

            var deleteId = $(this).data('id');
            var deleteUrl = deleteRoute.replace(':id', deleteId);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            Swal.fire({
                title: "{{ __('common.delete_popup.title') }}",
                text: "{{ __('common.delete_popup.text') }}",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: "{{ __('common.delete_popup.confirm_button') }}",
                cancelButtonText: "{{ __('common.delete_popup.cancel_button') }}",
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        url: deleteUrl,
                        method: 'DELETE',
                        data: {
                            'id': deleteId,
                            _token: $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(result) {
                            if (result.status == 'true') {
                                Swal.fire({
                                    type: 'success',
                                    text: 'Deleted',
                                })
                                location.reload();
                            } else {
                                if (result.message) {
                                    Swal.fire({
                                        title: "Can't Delete",
                                        text: result.message,
                                        type: 'warning',
                                    })
                                } else {
                                    Swal.fire({
                                        type: 'error',
                                        text: 'Failed to delete',
                                    })
                                }
                                // Swal.fire({
                                //     type: "error",
                                //     text: "Failed to delete",
                                // });
                            }
                        }
                    });
                }
            });
        });
        $(document).on("hidden.bs.modal", "#countryApprovalModal", function() {
            $("#farmer_country_table").find('tbody').empty("");
            // Just clear the contents
            $('#approval_msg').empty("");
        });
        $(document).on('click', '.countryApproval', function(e) {
            var farmer_id = $(this).data('id');

            $.ajax({
                url: base_url + "/farmer/country/" + farmer_id,
                dataType: "json",
                success: function(response) {
                    var farmer_countries = response.farmer.countries;
                    console.log(farmer_countries);
                    var html = "";
                    if (response.status) {
                        $(farmer_countries).each(function(index, element) {

                            html += ` 
                          <tr>
                            <th scope="row">${index+1}</th>
                            <td>${element.name}</td>
                            <td>
                            <select name="country_status" id="country_status" class="form-control country_status" data-id =${response.farmer.id} data-country-id =${element.id}>
                            <option value="0" ${element.pivot.status == 0 ? 'selected':''}>Pending</option>
                            <option value="1" ${element.pivot.status == 1 ? 'selected':''}>Approved</option>
                            <option value="2" ${element.pivot.status == 2 ? 'selected':''}>Rejected</option>
                            </select></td>
                          </tr>`
                        });
                        $('#farmer_country_table').find('tbody').append(html);
                        $('.farmer_name').text(response.farmer.name);
                        $('#countryApprovalModal').modal('show');
                    }

                }
            })




        })
        $(document).on('change', '.country_status', function() {
            var status = $(this).val();
            var id = $(this).data('id');
            var country_id = $(this).data('country-id');
            if (confirm('Are you sure ?')) {
                $.ajax({
                    url: "{{ route('farmer.countries') }}",
                    method: 'POST',
                    data: {
                        _token: "{{ csrf_token() }}",
                        status: status,
                        id: id,
                        country_id: country_id
                    },
                    success: function(response) {
                        if (response.status) {
                            setTimeout(function() {
                                $('#countryApprovalModal').modal('hide');
                            }, 5000);

                            html = '<div class="alert alert-success">' + response.success + '</div>';
                            $('#approval_msg').html(html);
                        }

                    }
                })
            }

        })
    </script>

@endsection
