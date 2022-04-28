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
        @forelse($result as $item)          
        <tr>
            <td colspan="" align="left" >
                {{  $item->IH_UpdDate }} 
                <br>
                ITEM NO<br>
                {{$item->ID_ItemNo}}
            </td>
            <td colspan="" align="left">
                {{ $item->IH_DocNo }}
                <br>
                DESCRIPTION<br>
                {{$item->ID_Description}}
            </td>
            <td colspan="" align="right">
                {{ $item->IH_Discount }}
                <br>
                <br>
                <br>
            </td>
            <td colspan="" align="right">
                {{ $item->IH_DocAmt }} 
                <br>
                TAX<br>
                0
            </td>
            <td colspan="" align="right">
                {{ $item->IH_PaymentAmt }}
                <br>
                QTY<br>
                {{$item->ID_Quantity}}
            </td>
            <td colspan="" align="right">
                {{ $item->IH_PymtModeReference ? $item->IH_PymtModeReference : '-' }}<br>
                PRICE<br>
                {{$item->ID_Price}}
            </td>
            <td colspan="" align="right">
                {{$item->IH_ACCTCODE}}
                <br>
                DISC%<br>
                {{$item->ID_Disc}}
            </td>
            <td colspan="" align="right">
                {{ $item->IH_Rounding }}
                <br>
                DISC$<br>
                {{$item->ID_Price * $item->ID_Disc }}
            </td>
            <td colspan="" align="right">
                {{ $item->IH_ServiceTax }}
                <br>
                S/P<br>
                {{$item->ID_SellingPrice }}
                
            </td>
            <td colspan="" align="right">
                {{ $item->IH_Total }}
                <br>
                Amount<br>
                {{$item->ID_TotalEx }}
            </td>
            <td colspan="" align="right">
                {{ $item->IH_Salesperson }}
                <br>
                <br>
                <br>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="11" align="center">
                No Data
            </td>
        </tr>
        @endforelse
    </tbody>
</table>