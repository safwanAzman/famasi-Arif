<div>
    <div wire:loading wire:target="generateExcel">
        <x-loading/>
    </div>
    <div class="bg-white shadow-xl px-6 py-10 rounded-xl">
        <x-form.basic-form wire:submit.prevent="">
            <div class="flex flex-col items-start justify-between sm:flex-row sm:items-center">
                <div class="flex flex-wrap items-center">
                    <div class="mr-0 md:mr-2 w-64 -mt-2">
                        <x-form.dropdown 
                            label="Cawangan" 
                            value="" 
                            default="" 
                            wire:model="report_branch"
                        >
                            <option value="branch_01">Sungai Ramal</option>
                            <option value="branch_02">Mesra Niaga</option>
                            <option value="branch_03">Pasir Besar</option>
                            <option value="branch_04">Bangi Awani</option>
                            <option value="branch_05">Warehouse</option>
                            <option value="branch_06">Tanah Merah</option>
                            <option value="branch_07">Jerteh</option>
                            <option value="branch_08">Seri Jempol</option>
                            <option value="branch_98">HQ</option>
                            <option value="branch_99">Seksyen 7</option>
                        </x-form.dropdown>
                    </div>

                    <div class="mr-0 md:mr-2">
                        <x-form.input 
                            label="Tarikh Dari" 
                            type="date"
                            name="" 
                            value=""
                            wire:model="startDate"
                        />
                    </div>

                    <div class="mr-0 md:mr-2">
                        <x-form.input 
                            label="Tarikh Hingga" 
                            type="date"
                            name="" 
                            value=""
                            wire:model="endDate"
                        />
                    </div>
                    <div class="mt-6">
                        <button wire:click="generateExcel" class="inline-flex items-center px-4 py-2 font-semibold text-white bg-green-500 rounded hover:bg-green-600 focus:outline-none mb-2" >
                            <x-heroicon-o-document-download class="w-6 h-6 mr-2"/>
                            <span>Excel</span>
                        </button>
                    </div>
            </div>
        </x-form.basic-form>

        <div class="mt-6">
            <x-table.table>
                <x-slot name="thead">
                    <x-table.table-header class="text-left"  sort="" value="Doc Date" />
                    <x-table.table-header class="text-left"  sort="" value="Doc No" />
                    <x-table.table-header class="text-right"  sort="" value="Disc" />
                    <x-table.table-header class="text-right"  sort="" value="Doc Amt" />
                    <x-table.table-header class="text-right"  sort="" value="Pymt Amt" />
                    <x-table.table-header class="text-right"  sort="" value="Pay Ref" />
                    <x-table.table-header class="text-right"  sort="" value="Customer" />
                    <x-table.table-header class="text-right"  sort="" value="Round" />
                    <x-table.table-header class="text-right"  sort="" value="GST" />
                    <x-table.table-header class="text-right"  sort="" value="Amt(Ex)" />
                    <x-table.table-header class="text-left"  sort="" value="S.Person" />
                </x-slot>
                <x-slot name="tbody">
                    
                    @forelse($result as $item)
                    <tr>
                        <x-table.table-body colspan="" class="text-left font-medium text-gray-900">
                            {{  $item->IH_UpdDate }} 
                            <br>
                            ITEM NO<br>
                            {{$item->ID_ItemNo}}
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-left font-medium text-gray-900">
                            {{ $item->IH_DocNo }}
                            <br>
                            DESCRIPTION<br>
                            {{$item->ID_Description}}
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-right font-medium text-gray-900">
                            {{ $item->IH_Discount }}
                            <br>
                            <br>
                            <br>
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-right font-medium text-gray-900">
                            {{ $item->IH_DocAmt }} 
                            <br>
                            TAX<br>
                            0
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-right font-medium text-gray-900">
                            {{ $item->IH_PaymentAmt }}
                            <br>
                            QTY<br>
                            {{$item->ID_Quantity}}
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-right font-medium text-gray-900">
                            {{ $item->IH_PymtModeReference ? $item->IH_PymtModeReference : '-' }}<br>
                            PRICE<br>
                            {{$item->ID_Price}}
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-right font-medium text-gray-900">
                            {{$item->IH_ACCTCODE}}
                            <br>
                            DISC%<br>
                            {{$item->ID_Disc}}
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-right font-medium text-gray-900">
                            {{ $item->IH_Rounding }}
                            <br>
                            DISC$<br>
                            {{$item->ID_Price * $item->ID_Disc }}
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-right font-medium text-gray-900">
                            {{ $item->IH_ServiceTax }}
                            <br>
                            S/P<br>
                            {{$item->ID_SellingPrice }}
                            
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-right font-medium text-gray-900">
                            {{ $item->IH_Total }}
                            <br>
                            Amount<br>
                            {{$item->ID_TotalEx }}
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-left font-medium text-gray-900">
                            {{ $item->IH_Salesperson }}
                            <br>
                            <br>
                            <br>
                        </x-table.table-body>
                    </tr>
                    @empty
                    <tr>
                        <x-table.table-body colspan="11" class="text-center font-medium text-gray-900">
                            No Data
                        </x-table.table-body>
                    </tr>
                    @endforelse
                    
                    
                    
                </x-slot>
            </x-table.table>
            <div class="mt-6">
                {{ $result->withQueryString()->links()}}
            </div>
            
        </div>
    </div>
</div>
