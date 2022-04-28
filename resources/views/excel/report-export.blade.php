<table>
    <thead>
    <tr>
        <th><b>Doc Date</b></th>
        <th><b>Doc No</b></th>
        <th><b>Disc</b></th>
        <th><b>Doc Amt</b></th>
        <th><b>Pymt Amt</b></th>
        <th><b>Pay Ref</b></th>
        <th><b>Customer</b></th>
        <th><b>Round</b></th>
        <th><b>GST</b></th>
        <th><b>Amt(Ex)</b></th>
        <th><b>S.Person</b></th>
    </tr>
    </thead>
    <tbody>
    {{-- @forelse($results as $item) --}}
        <tr>
            <td style="text-align: left">test</td>
        </tr>
    {{-- @empty
        <tr>
            <td colspan="11" align="center">No data available</td>
        </tr>
    @endforelse --}}
    </tbody>
</table>