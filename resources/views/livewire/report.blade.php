<div>
    <div>
        <x-form.basic-form wire:submit.prevent="">
            <div class="flex flex-col items-start justify-between sm:flex-row sm:items-center">
                <div class="flex flex-wrap items-center">
                    <div class="mr-0 md:mr-2 w-64 -mt-2">
                        <x-form.dropdown 
                            label="Cawangan" 
                            value="" 
                            default="" 
                            wire:model=""
                        >
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
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

                    <div class="mt-4 mr-0 md:mr-2">
                        <button id="submit_report" class="inline-flex items-center px-4 py-2 font-semibold text-white bg-blue-500 rounded hover:bg-blue-600 focus:outline-none" >
                            <x-heroicon-o-cog class="w-6 h-6 mr-2"/>
                            <span>Generate</span>
                        </button>
                    </div>
            </div>
        </x-form.basic-form>

        <div class="mt-6">
            <button wire:click="generateExcel" class="inline-flex items-center px-4 py-2 font-semibold text-white bg-green-500 rounded hover:bg-green-600 focus:outline-none mb-2" >
                <x-heroicon-o-document-download class="w-6 h-6 mr-2"/>
                <span>Excel</span>
            </button>
            <x-table.table>
                <x-slot name="thead">
                    <x-table.table-header class="text-left"  sort="" value="Doc Date" />
                    <x-table.table-header class="text-left"  sort="" value="Doc No" />
                    <x-table.table-header class="text-left"  sort="" value="Disc" />
                    <x-table.table-header class="text-left"  sort="" value="Doc Amt" />
                    <x-table.table-header class="text-left"  sort="" value="Pymt Amt" />
                    <x-table.table-header class="text-left"  sort="" value="Pay Ref" />
                    <x-table.table-header class="text-left"  sort="" value="Customer" />
                    <x-table.table-header class="text-left"  sort="" value="Round" />
                    <x-table.table-header class="text-left"  sort="" value="GST" />
                    <x-table.table-header class="text-left"  sort="" value="Amt(Ex)" />
                    <x-table.table-header class="text-left"  sort="" value="S.Person" />
                </x-slot>
                <x-slot name="tbody">
                    <tr>
                        <x-table.table-body colspan="" class="text-left font-medium text-gray-900">
                            Doc Date
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-left font-medium text-gray-900">
                            Doc No
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-left font-medium text-gray-900">
                            Disc
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-left font-medium text-gray-900">
                            Doc Amt
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-left font-medium text-gray-900">
                            Pymt Amt
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-left font-medium text-gray-900">
                            Pay Ref
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-left font-medium text-gray-900">
                            Customer
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-left font-medium text-gray-900">
                            Round
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-left font-medium text-gray-900">
                            GST
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-left font-medium text-gray-900">
                            Amt(Ex)
                        </x-table.table-body>
                        <x-table.table-body colspan="" class="text-left font-medium text-gray-900">
                            S.Person
                        </x-table.table-body>
                    </tr>
                </x-slot>
            </x-table.table>
        </div>
    </div>
</div>
