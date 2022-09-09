<table id="style-1" class="table style-1 dt-table-hover non-hover">
<thead>
<tr>
    <th class="checkbox-column dt-no-sorting" >#</th>
    <th>{{ trans('name') }}</th>
    <th>{{ trans('email') }}</th>
    <th>{{ trans('role') }}</th>
    <th class="text-center dt-no-sorting">{{ trans('actions') }}</th>
</tr>
</thead>
<tbody>
<tr>
    <td class="checkbox-column"> 1</td>
    <td class="user-name">Sean Freeman</td>
    <td>seanfreeman@admin.com</td>
    <td>555-555-5555</td>
    <td class="text-center">
        <div class="dropdown">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                     stroke-linecap="round" stroke-linejoin="round"
                     class="feather feather-more-horizontal">
                    <circle cx="12" cy="12" r="1"></circle>
                    <circle cx="19" cy="12" r="1"></circle>
                    <circle cx="5" cy="12" r="1"></circle>
                </svg>
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                <a class="dropdown-item" href="javascript:void(0);">View</a>
                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
            </div>
        </div>
    </td>
</tr>
</tbody>
</table>
