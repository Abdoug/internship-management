@extends('layouts.skeleton')
@section('content')
<div class="row">
    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 order-lg-1 order-xl-1">

        <!--begin::Portlet-->
        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">Subjects</h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <div class="kt-form kt-fork--label-right kt-margin-t-20 kt-margin-b-10">
                    <div class="row align-items-center">
                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                            <div class="kt-input-icon kt-input-icon--left">
                                <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                                <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                    <span><i class="la la-search"></i></span>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                            <div class="kt-form__group kt-form__group--inline">
                                <div class="kt-form__label">
                                    <label>Status:</label>
                                </div>
                                <div class="kt-form__control">
                                    <select class="form-control select2" id="kt_form_status">
                                        <option value="" selected>All</option>
                                        <option value="pending">Pending</option>
                                        <option value="confirmed">Confirmed</option>
                                        <option value="canceled">Canceled</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="kt-datatable" id="subjects_table"></div>
        </div>

        <!--end::Portlet-->
    </div>
</div>
@endsection
@section('script')
@parent
<script>
    "use strict";
    // Class definition

    let sub_data = (status = '', search = '') => {

        let url = `{{route('subject.getall')}}`;

        $('#subjects_table').KTDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url,
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr("content"),
                        },
                        params: {
                            status,
                            search
                        }
                    },
                },
                pageSize: 10,
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true,
            },

            // layout definition
            layout: {
                scroll: false,
                footer: false,
            },

            // column sorting
            sortable: true,

            pagination: true,

            // search: {
            //     input: $('#generalSearch'),
            // },

            // columns definition
            columns: [{
                    field: 'name',
                    title: 'Subject Name',
                },
                {
                    field: 'valid',
                    title: 'Status',
                },
                {
                    field: 'company_name',
                    title: 'Company',
                    sortable: false,
                    width: 110,
                    overflow: 'visible',
                    autoHide: false,
                    template: function(row, data) {

                        let name = row.company_name;
                        return name;

                    },
                },
                {
                    field: 'commission_responsable',
                    title: 'Commission Responsable',
                    sortable: false,
                    width: 110,
                    overflow: 'visible',
                    autoHide: false,
                    template: function(row, data) {

                        return row.commission_responsable ?
                            row.commission_responsable : 'pending';

                    },
                },
                {
                    field: 'id',
                    title: 'Actions',
                    sortable: false,
                    width: 110,
                    overflow: 'visible',
                    autoHide: false,
                    template: function() {
                        return '\
            <div class="dropdown">\
                <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-sm" data-toggle="dropdown">\
                    <i class="flaticon2-gear"></i>\
                </a>\
                  <div class="dropdown-menu dropdown-menu-right">\
                    <a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\
                    <a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\
                    <a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\
                  </div>\
            </div>\
            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-sm" title="Edit details">\
                <i class="flaticon2-paper"></i>\
            </a>\
            <a href="javascript:;" class="btn btn-sm btn-clean btn-icon btn-icon-sm" title="Delete">\
                <i class="flaticon2-trash"></i>\
            </a>\
        ';
                    },
                }
            ],

        });


    }

    $('#kt_form_status').selectpicker();

    $(document).ready(function() {
        sub_data();
    });
    $('#kt_form_status').on('change', function() {
        $('#subjects_table').KTDatatable().destroy();
        let status = $(this).val();
        let search = $('#generalSearch').val().toLowerCase();
        sub_data(status, search);
    });
    $('#generalSearch').on('keyup', function() {
        $('#subjects_table').KTDatatable().destroy();
        let status = $('#kt_form_status').val();
        let search = $(this).val().toLowerCase();
        sub_data(status, search);
    });
</script>
@endsection