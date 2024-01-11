<?php
$title = "Our Services";
$activePage = 'services';
include("includes/head.php");
?>
<!-- our service -->
<div class="container">
    <div class="row justify-content-evenly mt-5  " id="services">
        <h1 class="text-center mb-3" data-aos="fade-up-right" data-aos-duration="1000">Our Services</h1>
        <div class="col-md-3 text-center " data-aos="fade-up-right" data-aos-duration="1000" id="border">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-truck-flatbed" viewBox="0 0 16 16">
                <path
                    d="M11.5 4a.5.5 0 0 1 .5.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-4 0 1 1 0 0 1-1-1v-1h11V4.5a.5.5 0 0 1 .5-.5zM3 11a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm1.732 0h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4a2 2 0 0 1 1.732 1z" />
            </svg>
            <p>
            <h2 id="car">Car towing</h2>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, nemo!</p>
        </div>
        <div class="col-md-3 text-center" id="border" data-aos="fade-up-right" data-aos-duration="1000">
            <img src="photos/tire.png" height="20px" width="20px" alt="">
            <h2>Flat Tire</h2>
            Depending on the damage to your tire, we'll either install your usable spare, re-inflate your tire, or
            tow your vehicle.
        </div>
        <div class="col-md-3 text-center" id="border" data-aos="fade-up-right" data-aos-duration="1000">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                class="bi bi-battery-charging" viewBox="0 0 16 16">
                <path
                    d="M9.585 2.568a.5.5 0 0 1 .226.58L8.677 6.832h1.99a.5.5 0 0 1 .364.843l-5.334 5.667a.5.5 0 0 1-.842-.49L5.99 9.167H4a.5.5 0 0 1-.364-.843l5.333-5.667a.5.5 0 0 1 .616-.09z" />
                <path
                    d="M2 4h4.332l-.94 1H2a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h2.38l-.308 1H2a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2z" />
                <path
                    d="M2 6h2.45L2.908 7.639A1.5 1.5 0 0 0 3.313 10H2V6zm8.595-2-.308 1H12a1 1 0 0 1 1 1v4a1 1 0 0 1-1 1H9.276l-.942 1H12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.405z" />
                <path
                    d="M12 10h-1.783l1.542-1.639c.097-.103.178-.218.241-.34V10zm0-3.354V6h-.646a1.5 1.5 0 0 1 .646.646zM16 8a1.5 1.5 0 0 1-1.5 1.5v-3A1.5 1.5 0 0 1 16 8z" />
            </svg>
            <h2>Car Battery Service</h2>
            We can test your battery and jump-start or replace it with a new one on the spot. Battery replacement
            not available in all areas.
        </div>
    </div>

    <div class="row justify-content-evenly mt-3 ">
        <div class="col-md-3 text-center" id="border" data-aos="fade-up-right" data-aos-duration="1000">
            <img src="photos/petrol-can (1).png" height="20px" width="20px" alt="logo">
            <h2>Emergency Fuel Delivery</h2>
            If you run out of fuel, we’ll bring you enough to get you to the nearest gas station. Diesel fuel
            delivery available upon request in some locations.
        </div>
        <div class="col-md-3 text-center" id="border" data-aos="fade-up-right" data-aos-duration="1000">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-key-fill"
                viewBox="0 0 16 16">
                <path
                    d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
            </svg>
            <h2>Locksmith Service</h2>
            Locked out? We'll send Roadside Service to help you gain entry—or provide towing based on your
            Membership
        </div>
    </div>
</div>
<?php
  include("includes/footer.php");
?>
