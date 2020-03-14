@extends('layouts.skeleton')
@section('content')
<div class="row">
    <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12 order-lg-1 order-xl-1">

        <!--begin::Portlet-->
        <div class="kt-portlet kt-portlet--height-fluid">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">Stages</h3>
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
                    </div>
                </div>
            </div>
            <div class="kt-datatable" id="stages_table"></div>
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

        let url = `{{route('stage.getall')}}`;

        $('#stages_table').KTDatatable({
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
                    field: 'subject_name',
                    title: 'Subject Name',
                },
                {
                    field: 'stage',
                    title: 'Stage ID',
                },
                {
                    field: 'soutenance',
                    title: 'Soutenance ID',
                },
                {
                    field: 'dates',
                    title: 'Soutenance Date',
                },
                {
                    field: 'pfe_name',
                    title: 'PFE Name',
                },
                {
                    field: 'pv',
                    title: 'PV ID',
                },
                {
                    field: 'average',
                    title: 'Moyen',
                },
                {
                    field: 'satge',
                    title: 'Action',
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
</script>
@endsection