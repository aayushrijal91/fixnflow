<div class="bg-white rounded-[30px] px-8 py-6 shadow-xl checkServiceAreaForm">
    <div class="text-dark-blue text-xl md:text-2xl font-extrabold">Check if we service your area</div>
    <div class="bg-lime-500 mt-4 py-3 px-4 text-white font-semibold yesService hidden">We service your area.</div>
    <div class="bg-rose-600 mt-4 py-3 px-4 text-white font-semibold noService hidden">Sorry! We do not service your area.</div>
    <div class="bg-rose-600 mt-4 py-3 px-4 text-white font-semibold dataFetchError hidden">Sorry! We are unable to fetch the data.</div>
    <form class="flex flex-wrap -mx-2 gap-y-5 pt-8" id="checkServiceAreaForm">
        <div class="w-full md:w-1/2 px-2">
            <label class="font-articulat font-semibold text-grey">What services do you need?</label>
            <select name="service" class="h-14 bg-light-grey rounded-md px-4 w-full mt-3 outline-none font-semibold" required>
                <option selected>Emergency Plumbing</option>
                <option>Blocked Drains</option>
                <option>Hot Water Services</option>
                <option>Taps & Toilets</option>
                <option>Rainwater Tanks & Pumps</option>
                <option>Gas Plumbing</option>
                <option>General Plumbing</option>
                <option>Commercial Plumbing</option>
                <option>Water Filters</option>
                <option>Backflow Prevention & RPZ Valves</option>
                <option>Septic Systems</option>
                <option>Roofing & Guttering</option>
            </select>
        </div>
        <div class="w-full md:w-1/2 px-2">
            <label class="font-articulat font-semibold text-grey">Your area</label>
            <input type="text" name="area" class="h-14 bg-light-grey rounded-md px-4 w-full mt-3 outline-none font-semibold" placeholder="Enter postcode or suburb">
        </div>
        <div class="w-full px-2">
            <button type="submit" class="btn-main-blue-hover-yellow w-full"><span class='relative z-10'>Submit</span></button>
        </div>
    </form>
</div>