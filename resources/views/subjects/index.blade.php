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

    var KTDatatableRemoteAjaxDemo = function() {
        // Private functions

        // basic demo
        var demo = function() {

            let url = `{{route('subject.index')}}`;

            var datatable = $('#subjects_table').KTDatatable({
                // datasource definition
                data: {
                    type: 'remote',
                    source: {
                        read: {
                            url,
                            method: 'GET',
                            _token: $('meta[name=csrf-token]').attr("content")
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

                search: {
                    input: $('#generalSearch'),
                },

                // columns definition
                columns: [{
                    field: 'name',
                    title: 'Subject Name',
                }, {
                    field: 'Actions',
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
                }],

            });

            $('#kt_form_status').on('change', function() {
                datatable.search($(this).val().toLowerCase(), 'status');
            });

            $('#kt_form_type').on('change', function() {
                datatable.search($(this).val().toLowerCase(), 'type');
            });

            $('#kt_form_status,#kt_form_type').selectpicker();

        };

        return {
            // public functions
            init: function() {
                demo();
            },
        };
    }();

    $(document).ready(function() {
        KTDatatableRemoteAjaxDemo.init();
    });
</script>
@endsection