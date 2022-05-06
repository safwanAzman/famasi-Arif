<table>
    <tr>
        <th colspan="11" align="center">
            <br>
            TEL : 0382109464 FAX : 0382109464
            <br>
            <b>SALES LISTING</b>
            <br>
            (Details Group by Payment Mode)
            <br>
            ( From : {{$starDate}} To : {{$endDate}} )
            <br>
        </th>
    </tr>
</table>
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
        @forelse($result->groupBy('IH_DocNo') as $key => $item)
            <tr>
                <td colspan="" align="left" >
                    {{  date('d-m-Y', strtotime($item[0]->IH_UpdDate)) }}
                </td>
                <td colspan="" align="left" >
                    {{ $item[0]->IH_DocNo }}
                </td>
                <td colspan="" align="right" >
                    {{ $item[0]->IH_Discount }}
                </td>
                <td colspan="" align="right" >
                    {{ $item[0]->IH_DocAmt }} 
                </td>
                <td colspan="" align="right" >
                    {{ $item[0]->IH_PaymentAmt }}
                </td>
                <td colspan="" align="right" >
                    {{ $item[0]->IH_PymtModeReference}}
                </td>
                <td colspan="" align="right" >
                    {{$item[0]->IH_ACCTCODE}}
                </td>
                <td colspan="" align="right" >
                    {{ $item[0]->IH_Rounding }}
                </td>
                <td colspan="" align="right" >
                    {{ $item[0]->IH_ServiceTax }}
                </td>
                <td colspan="" align="right" >
                    {{ $item[0]->IH_Total }}
                </td>
                <td colspan="" class="text-center font-medium text-gray-900">
                    {{ $item[0]->IH_Salesperson }}
                </td>
            </tr>

            <tr>
                <td colspan="" align="left" >
                    <b>ITEM NO</b>
                </td>
                <td colspan="2" align="left" >
                    <b>DESCRIPTION</b>
                </td>
                <td colspan="" align="right" >
                    <b>TAX</b>
                </td>
                <td colspan="" align="right" >
                    <b>QTY</b>
                </td>
                <td colspan="" align="right" >
                    <b>PRICE</b>
                </td>
                <td colspan="" align="right" >
                    <b>DISC%</b>
                </td>
                <td colspan="" align="right" >
                    <b>DISC$</b>
                </td>
                <td colspan="" align="right" >
                    <b>S/P</b>
                </td>
                <td colspan="" align="right" >
                    <b>Amount</b>
                </td>
                <td colspan="" class="text-center font-medium text-gray-900">
                    <b>S.Person</b>
                </td>
            </tr>

            @foreach ($item as $key => $row)
            <tr>
                <td colspan="" align="left" >
                    {{$row->ID_ItemNo}}
                </td>
                <td colspan="2" align="left" >
                    {{$row->ID_Description}}
                </td>
                <td colspan="" align="right" >
                    -
                </td>
                <td colspan="" align="right" >
                    {{$row->ID_Quantity}}
                </td>
                <td colspan="" align="right" >
                    {{$row->ID_Price}}
                </td>
                <td colspan="" align="right" >
                    {{$row->ID_Disc}}
                </td>
                <td colspan="" align="right" >
                    {{$row->ID_Price * $row->ID_Disc }}
                </td>
                <td colspan="" align="right" >
                    {{$row->ID_SellingPrice }}
                </td>
                <td colspan="" align="right" >
                    {{$row->ID_TotalEx }}
                </td>
                <td colspan="" class="text-center font-medium text-gray-900">
                    S.Person
                </td>
            </tr>  
            @endforeach
            @empty

            <tr>
                <td colspan="11" class="text-center font-medium text-gray-900">
                    No Data
                </td>
            </tr>
        @endforelse
    </tbody>
</table>