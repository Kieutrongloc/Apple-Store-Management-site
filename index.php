<!DOCTYPE html>
<br lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Addict - Apple Store Online</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="assets/css/base.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- <link rel="stylesheet" href="main.js"> -->
    <link rel="stylesheet" href="assets/font/themify-icons/Themify IconFonts 5-23-2014.json">
    <link rel="stylesheet" href="assets/font/fontawesome-free-6.2.0-web/css/all.css">

</head>
<div>
    <!-- HEADER -->
    <header>
        <div class="header" id="header">
            <ul id="header-nav" class="none-address-style">
                <li class="nav-res-pchide" onclick="showNavmenu()"><i class="fa-solid fa-bars"></i></li>
                <li class="nav-res-mobile-show-appleicon"><a href="" class="nav-icons"><i class="fa-brands fa-apple"></i></a></li>
                <li class="nav-res-mobile-hide"><a href="" class="nav-items">Store</a></li>
                <li class="nav-res-mobile-hide"><a href="" class="nav-items">Mac</a></li>
                <li class="nav-res-mobile-hide"><a href="" class="nav-items">iPad</a></li>
                <li class="nav-res-mobile-hide"><a href="" class="nav-items">iPhone</a></li>
                <li class="nav-res-mobile-hide"><a href="" class="nav-items">Watch</a></li>
                <li class="nav-res-mobile-hide"><a href="" class="nav-items">Airpods</a></li>
                <li class="nav-res-mobile-hide"><a href="" class="nav-items">TV & Home</a></li>
                <li class="nav-res-mobile-hide"><a href="" class="nav-items">Only on Apple</a></li>
                <li class="nav-res-mobile-hide"><a href="" class="nav-items">Accessories</a></li>
                <li class="nav-res-mobile-hide"><a href="" class="nav-items">Support</a></li>
                <li class="nav-res-mobile-hide"><a href="" class="nav-icons"><i class="fa-solid fa-magnifying-glass"></i></a></li>
                <li class="nav-res-mobile-show-bag" style="position: relative;"><div href="" class="nav-icons" id="nav-icons-bag" onclick="showSubnav(event)"><i class="fa-solid fa-suitcase"></i></div>
                    <p class="cart-quantity-at-bag" onclick="showSubnav(event)">0</p>
                    <div id="subnav-cart-checkout">
                        <div class="cart-checkout-table">
                            <div class="cart-checkout-table-item">
                                <!-- <div style="display: flex;justify-content: space-between;padding-bottom: 10px;" class="subnav-item-list">
                                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-blue-202110?wid=200&hei=200&fmt=jpeg&qlt=95&.v=1632925511000" alt="" class="checkout-item-img">
                                    <div class="cart-checkout-item-list">
                                        <div style="display: flex;">
                                           <p style="color:black" class="checkout-item-name">HomePod mini - Blue</p>
                                        </div>
                                        <div style="display: flex;justify-content: space-between;">
                                            <input style="max-width: 40px;" type="number" value="1" min="1" class="checkout-item-qtt">
                                            <p style="color:black" class="checkout-item-price"><span>$</span><span>99</span></p>
                                        </div>
                                    </div>
                                    <p style="color:red;margin: 20px 0px;cursor: pointer;" class="checkout-item-remove">Remove</p>
                                </div>
                                <div style="display: flex;justify-content: space-between;padding-bottom: 10px;" class="subnav-item-list">
                                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MPPP3?wid=200&hei=200&fmt=jpeg&qlt=95&.v=1662503140974" alt="" class="checkout-item-img">
                                    <div class="cart-checkout-item-list">
                                        <div style="display: flex;">
                                           <p style="color:black" class="checkout-item-name">iPhone 14 pro Max Leather Case with MagSafe - Ink</p>
                                        </div>
                                        <div style="display: flex;justify-content: space-between;">
                                            <input style="max-width: 40px;" type="number" value="1" min="1" class="checkout-item-qtt">
                                            <p style="color:black" class="checkout-item-price"><span>$</span><span>59</span></p>
                                        </div>
                                    </div>
                                    <p style="color:red;margin: 20px 0px;cursor: pointer;" class="checkout-item-remove">Remove</p>
                                </div> -->
                                
                            </div>
                            <div class="subnav-line-through"></div>
                            <p class="subnav-checkout-total"><span class="subnav-checkout-total-number">No item in your cart</span></p>
                            <a href="" class="subnav-checkout">Check out</a>
                        </div>
                        <ul class="subnav-checkout-list">
                            <li class="subnav-select-list"><a href="" class="subnav-list-address hover-underline">
                                <i class="subnav-list-icon fa-solid fa-suitcase"></i>Bag<span class="checkout-quantity"></span>
                            </a></li>
                            <li class="subnav-select-list"><a href="" class="subnav-list-address hover-underline">
                                <i class="subnav-list-icon fa-solid fa-tag"></i>Saved Items
                            </a></li>
                            <li class="subnav-select-list"><a href="" class="subnav-list-address hover-underline">
                                <i class="subnav-list-icon fa-solid fa-box"></i>Orders
                            </a></li>
                            <li class="subnav-select-list"><a href="" class="subnav-list-address hover-underline">
                                <i class="subnav-list-icon fa-solid fa-gear"></i>Account
                            </a></li>
                            <li class="subnav-select-list"><a href="http://localhost/www/manage_product/Apple-Store-Management-site/accessories-manage/" class="subnav-list-address hover-underline">
                                <i class="subnav-list-icon fa-solid fa-gear"></i>Manage Products
                            </a></li>
                            <li class="subnav-select-list-last"><a href="" class="subnav-list-address hover-underline">
                                <i class="subnav-list-icon fa-solid fa-user"></i>Sign out
                            </a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </header>

    <!-- SECTION -->
    
    <section>
        <div class="section-intro">
            <!-- First section -->
            <div class="section-nav-row">
                <h1 class="header-content"><span class="header-main">Store.</span> <span class="header-details">The best way to buy the <br> products you love.</span></h1>
                <div class="nav-row-chat">
                    <div class="nav-row-chat-section">
                        <img class="nav-row-chat-section-img" src="assets/img/store-support-chat.jpeg" alt="Support chat">
                        <div>
                            <p class="nav-row-chat-title nav-row-chat-content">Need shopping help</p>
                            <a class="nav-row-chat-link none-address-style nav-row-chat-content" href="">Ask a Specialist</a>
                        </div>
                    </div>
                    <div class="nav-row-chat-section">
                        <img class="nav-row-chat-section-img" src="assets/img/chat-support.webp" alt="chat-support">
                        <div>
                            <p class="nav-row-chat-title nav-row-chat-content">Visit an Apple Store</p>
                            <a class="nav-row-chat-link none-address-style nav-row-chat-content" href="">Find one near you></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Second section -->
            <div class="section-nav-devices">
                <div class="section-nav-devices-list overflow-hidden">
                   <div class="devices-list-items">
                    <div class="items-detail">
                        <a href=""> <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-13-mac-nav-202203?wid=200&hei=130&fmt=png-alpha&.v=1645051958490" alt="" class="device-photo"></a>
                        <a href="" class="device-name hover-underline none-address-style">Mac</a>
                    </div>
                   </div>
                   <div class="devices-list-items">
                    <div class="items-detail">
                        <a href=""> <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-13-iphone-nav-202209_GEO_US?wid=200&hei=130&fmt=png-alpha&.v=1661027785546" alt="" class="device-photo"></a>
                        <a href="" class="device-name hover-underline none-address-style">iPhone</a>
                    </div>
                   </div>
                   <div class="devices-list-items">
                    <div class="items-detail">
                        <a href=""> <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-13-ipad-nav-202108?wid=200&hei=130&fmt=png-alpha&.v=1625783381000" alt="" class="device-photo"></a>
                        <a href="" class="device-name hover-underline none-address-style">iPad</a>
                    </div>
                   </div>
                   <div class="devices-list-items">
                    <div class="items-detail">
                        <a href=""> <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-13-watch-nav-202209?wid=200&hei=130&fmt=png-alpha&.v=1661796454103" alt="" class="device-photo"></a>
                        <a href="" class="device-name hover-underline none-address-style">Apple Watch</a>
                    </div>
                   </div>
                   <div class="devices-list-items">
                    <div class="items-detail">
                        <a href=""> <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-13-airpods-nav-202209?wid=200&hei=130&fmt=png-alpha&.v=1660676485885" alt="" class="device-photo"></a>
                        <a href="" class="device-name hover-underline none-address-style">Airpods</a>
                    </div>
                   </div>
                   <div class="devices-list-items">
                    <div class="items-detail">
                        <a href=""> <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-13-airtags-nav-202108?wid=200&hei=130&fmt=png-alpha&.v=1625783380000" alt="" class="device-photo"></a>
                        <a href="" class="device-name hover-underline none-address-style">AirTag</a>
                    </div>
                   </div>
                   <div class="devices-list-items">
                    <div class="items-detail">
                        <a href=""> <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-13-appletv-nav-202108?wid=200&hei=130&fmt=png-alpha&.v=1625783378000" alt="" class="device-photo"></a>
                        <a href="" class="device-name hover-underline none-address-style">Apple TV</a>
                    </div>
                   </div>
                   <div class="devices-list-items">
                    <div class="items-detail">
                        <a href=""> <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-13-homepod-nav-202110?wid=200&hei=130&fmt=png-alpha&.v=1633355783000" alt="" class="device-photo"></a>
                        <a href="" class="device-name hover-underline none-address-style">HomePod mini</a>
                    </div>
                   </div>
                   <div class="devices-list-items">
                    <div class="items-detail">
                        <a href=""> <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-13-accessories-nav-202209?wid=200&hei=130&fmt=png-alpha&.v=1660677092974" alt="" class="device-photo"></a>
                        <a href="" class="device-name hover-underline none-address-style">Accessories</a>
                    </div>
                   </div>
                   <div class="devices-list-items">
                    <div class="items-detail">
                        <a href=""> <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-13-holiday-giftcards-asit-agc-nav-202111?wid=200&hei=130&fmt=png-alpha&.v=1653339351054" alt="" class="device-photo"></a>
                        <a href="" class="device-name hover-underline none-address-style">Apple Gift Card</a>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAIN -->
    <div class="main-body">
        <!-- Main first top devices -->
        <div class="main-first-top-devices">
            <h2 class="main-header"><span>The latest. </span> <span class="header-details">Take a look at what's new, right now</span></h2>
            <div class="top-devices-intro-content overflow-hidden">
                <a href="" class="top-devices-intro-items hover-style">
                    <div class="intro-items-info">
                        <p class="items-info-name">IPHONE 14 PRO</p>
                        <p class="items-info-features">Pro. Beyond.</p>
                        <p class="items-info-price">From $999.00 or $41.62/mo. for 24 mo. before trade-in*</p>
                    </div>
                    <img class="intro-items-img border-radius-shadow" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-iphone-14-pro-202209?wid=400&hei=500&fmt=p-jpg&qlt=95&.v=1661181419170" alt="">
                </a>
                <a href="" class="top-devices-intro-items hover-style">
                    <div class="intro-items-info">
                        <p class="items-info-name">APPLE WATCH SERIES 8</p>
                        <p class="items-info-features">A healthy leap ahead.</p>
                        <p class="items-info-price">From $399 or 16.62/mo. for 24mo.</p>
                    </div>
                    <img class="intro-items-img border-radius-shadow" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-watch-s8-202209?wid=400&hei=500&fmt=p-jpg&qlt=95&.v=1661792340121" alt="">
                </a>
                <a href="" class="top-devices-intro-items hover-style">
                    <div class="intro-items-info text-black-reflect">
                        <p class="items-info-name">IPHONE 14</p>
                        <p class="items-info-features">Big and bigger.</p>
                        <p class="items-info-price">From $799.00 or $33.29/mo. for 24 mo. before trade-in*</p>
                    </div>
                    <img class="intro-items-img border-radius-shadow" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-iphone-14-202209_GEO_US?wid=400&hei=500&fmt=jpeg&qlt=95&.v=1661890731674" alt="">
                </a>
                <a href="" class="top-devices-intro-items hover-style">
                    <div class="intro-items-info text-black-reflect">
                        <p class="items-info-name">APPLE WATCH ULTRA</p>
                        <p class="items-info-features">Adventure awaits.</p>
                        <p class="items-info-price">From $799 or $33.29/mo for 24 mo.</p>
                    </div>
                    <img class="intro-items-img border-radius-shadow" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-watch-ultra-202209?wid=400&hei=500&fmt=p-jpg&qlt=95&.v=1660686053448" alt="">
                </a>
                <a href="" class="top-devices-intro-items hover-style">
                    <div class="intro-items-info">
                        <p class="items-info-name">AIRPODS PRO (2ND GENERATION)</p>
                        <p class="items-info-features">Rebuilt from the sound up.</p>
                        <p class="items-info-price">$249.00 or $41.50/mo. for 6 mo.</p>
                    </div>
                    <img class="intro-items-img border-radius-shadow" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-airpods-pro-202209?wid=400&hei=500&fmt=p-jpg&qlt=95&.v=1661016986712" alt="">
                </a>
                <a href="" class="top-devices-intro-items hover-style">
                    <div class="intro-items-info text-black-reflect">
                        <p class="items-info-name">APPLE WATCH SE</p>
                        <p class="items-info-features">A great deal to love.</p>
                        <p class="items-info-price">From $249 or $10.37/mo. for 24mo.</p>
                    </div>
                    <img class="intro-items-img border-radius-shadow" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-watch-se-202209?wid=400&hei=500&fmt=p-jpg&qlt=95&.v=1663863101049" alt="">
                </a>
                <a href="" class="top-devices-intro-items hover-style">
                    <div class="intro-items-info text-black-reflect">
                        <p class="items-info-name">MACBOOK AIR WITH M2 CHIP</p>
                        <p class="items-info-features">Don't take it lightly</p>
                        <p class="items-info-price">From $1199 or $99.91/mo. for 12 mo</p>
                    </div>
                    <img class="intro-items-img border-radius-shadow" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-macbook-air-202206?wid=400&hei=500&fmt=p-jpg&qlt=95&.v=1652743701977" alt="">
                </a>
                <a href="" class="top-devices-intro-items hover-style">
                    <div class="intro-items-info">
                        <p class="items-info-name">MACBOOK PRO 13"</p>
                        <p class="items-info-features">Pro anywhere.</p>
                        <p class="items-info-price">From $1299 or $108.25mo. for 12 mo.</p>
                    </div>
                    <img class="intro-items-img border-radius-shadow" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-macbook-pro-202206?wid=400&hei=500&fmt=p-jpg&qlt=95&.v=1652803481192" alt="">
                </a>
                <a href="" class="top-devices-intro-items hover-style">
                    <div class="intro-items-info">
                        <p class="items-info-name">IPAD AIR</p>
                        <p class="items-info-features">Light. Bright. Full of might</p>
                        <p class="items-info-price">From $599 or $49.91/mo. for 12 mo.</p>
                    </div>
                    <img class="intro-items-img border-radius-shadow" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-ipad-air-202203?wid=400&hei=500&fmt=p-jpg&qlt=95&.v=1645636337374" alt="">
                </a>
            </div>
        </div>
        <!-- Main second support -->
        <div class="main-second-support">
            <h2 class="main-header">Help is here. <span class="header-details">Whenever and however you need it.</span></h2>
            <div class="support-detail-nav">
                <a href="" class="support-detail-nav-items hover-style">
                    <h3 class="support-detail-nav-item-intro">Shop one on with a Specialist. Online or in store</h3>
                    <img class="support-detail-photo border-radius-shadow" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-50-specialist-202208?wid=480&hei=500&fmt=p-jpg&qlt=95&.v=1658942547535" alt="">
                </a>
                <div class="support-detail-nav-items">
                    <a href="" class="detail-nav-items-col hover-style">
                        <h4 class="nav-items-col-intro">Get to know your new device with a free Personal Session</h4>
                        <img class="items-col-intro-photo border-radius-shadow" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-25-apps-202108?wid=480&hei=240&fmt=p-jpg&qlt=95&.v=1626223748000" alt="">
                    </a>
                    <a href="" class="detail-nav-items-col hover-style">
                        <h4 class="nav-items-col-intro nav-item-col-intro-left">Get expert service and support at the Genius Bar</h4>
                        <img class="items-col-intro-photo border-radius-shadow" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-25-genius-202108?wid=480&hei=240&fmt=p-jpg&qlt=95&.v=1626384443000" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- Main third store -->
        <div class="main-third-store">
            <h2 class="main-header">The Apple Store difference. <span class="header-details">Even more reasons to shop with us.</span></h2>
            <div class="main-third-store-nav overflow-hidden">
                <a href="" class="third-store-nav-item hover-style border-radius-shadow">
                    <img src="assets/img/apple-red-container.png" alt="" class="store-nav-item-icon">
                    <p class="store-nav-item-detail">Enjoy <span class="span-color-red" style="color: red;">two-hour delivery</span> from an Apple Store, <span class="span-color-red" style="color: red;">free delivery</span>, or <span class="span-color-red">easy pickup</span></p>
                </a>
                <a href="" class="third-store-nav-item hover-style border-radius-shadow">
                    <img src="assets/img/apple-trading.png" alt="" class="store-nav-item-icon">
                    <p class="store-nav-item-detail"><span class="color-violet" style="color: rgb(218, 93, 218);">Trade in your current device.</span> Get credit toward a new one.</p>
                </a>
                <a href="" class="third-store-nav-item hover-style border-radius-shadow">
                    <img src="assets/img/apple-pay.png" alt="" class="store-nav-item-icon">
                    <p class="store-nav-item-detail">Pay in full or <span class="color-green" style="color: green;">pay over time.</span> Your choice.</p>
                </a>
                <a href="" class="third-store-nav-item hover-style border-radius-shadow">
                    <img src="assets/img/apple-emoji.png" alt="" class="store-nav-item-icon">
                    <p class="store-nav-item-detail">Make them yours. <span class="color-blue" style="color: blue;">Engrave a mix of emoji, names, and numbers for free.</span></p>
                </a>
                <a href="" class="third-store-nav-item hover-style border-radius-shadow">
                    <img src="assets/img/apple-logo-apple.png" alt="" class="store-nav-item-icon">
                    <p class="store-nav-item-detail"><span class="color-gradient">Customize</span> your Mac and create your own style of Apple Watch.</p>
                </a>
                <a href="" class="third-store-nav-item hover-style border-radius-shadow">
                    <img src="assets/img/apple-gift-wrapping.png" alt="" class="store-nav-item-icon">
                    <p class="store-nav-item-detail">Add to the excitement with <span class="color-orange" style="color: orange;">special gift wrapping.</span></p>
                </a>
            </div>
        </div>
        <!-- Main fourth accessories -->
        <div class="main-fourth-accessories">
            <h2 class="main-header">Accessories. <span class="header-details">Essentials that pair perfectly with your favorite devices</span></h2>
            <div class="fourth-accessories-nav overflow-hidden">
                <a href="" class="fourth-accessories-nav-box hover-style">
                    <div class="accessories-nav-item-main">
                        <h3 class="accessories-nav-item-header">In with the new.</h3>
                        <p class="accessories-nav-item-detail">Discover fresh new colors for your favorite accessories</p>
                    </div>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-new-accessories-202203?wid=400&hei=500&fmt=p-jpg&qlt=95&.v=1645052150646" alt="" class="accessories-nav-item-img-larger border-radius-shadow">
                </a>
                <div href="" class="accessories-nav-item border-radius-shadow hover-style">
                    <i class="nav-item-add fa-solid fa-cart-plus" style="float: right;cursor: pointer;"></i>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-blue-202110?wid=200&hei=200&fmt=jpeg&qlt=95&.v=1632925511000" alt="" class="accessories-nav-item-img">
                    <ul class="nav-item-color">
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-brown" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-spacegray-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037004000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-whiteblue" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-blue-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037003000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-white" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-white-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037006000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-yellow" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-yellow-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037005000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-orange" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-orange-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037003000" alt=""></li>
                    </ul>
                    <div class="fourth-accessory-nav-box">
                        <p class="nav-item-accessories-status">New</p>
                        <p class="accessories-nav-item-name">HomePod mini - Blue</p>
                        <p class="accessories-nav-item-price">$99.00</p>
                    </div>
                </div>
                <div href="" class="accessories-nav-item border-radius-shadow hover-style">
                    <i class="nav-item-add fa-solid fa-cart-plus" style="float: right;cursor: pointer;"></i>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MPPP3?wid=200&hei=200&fmt=jpeg&qlt=95&.v=1662503140974" alt="" class="accessories-nav-item-img">
                    <ul class="nav-item-color">
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-brown" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-spacegray-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037004000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-whiteblue" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-blue-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037003000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-gray" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MPPP3_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1662503130629" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-darkgray" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MPPM3_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1662503162103" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-orange" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-orange-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037003000" alt=""></li>
                    </ul>
                    <div class="fourth-accessory-nav-box">
                        <p class="nav-item-accessories-status">New</p>
                        <p class="accessories-nav-item-name">iPhone 14 pro Max Leather Case with MagSafe - Ink</p>
                        <p class="accessories-nav-item-price">$59.00</p>
                    </div>
                </div>
                <div href="" class="accessories-nav-item border-radius-shadow hover-style">
                    <i class="nav-item-add fa-solid fa-cart-plus" style="float: right;cursor: pointer;"></i>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MP833ref?wid=200&hei=200&fmt=jpeg&qlt=95&.v=1660864496282" alt="" class="accessories-nav-item-img">
                    <ul class="nav-item-color">
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-gray" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MPPP3_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1662503130629" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-darkgray" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MPPM3_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1662503162103" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-orange" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-orange-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037003000" alt=""></li>
                    </ul>
                    <div class="fourth-accessory-nav-box">
                        <p class="nav-item-accessories-status">New</p>
                        <p class="accessories-nav-item-name">41mm Ink Leather Link -S/M</p>
                        <p class="accessories-nav-item-price">$99.00</p>
                    </div>
                </div>
                <div href="" class="accessories-nav-item border-radius-shadow hover-style">
                    <i class="nav-item-add fa-solid fa-cart-plus" style="float: right;cursor: pointer;"></i>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/apple-tv-4k-hero-select-202104?wid=200&hei=200&fmt=jpeg&qlt=95&.v=1619139498000" alt="" class="accessories-nav-item-img">
                    <div class="fourth-accessory-nav-box">
                        <p class="accessories-nav-item-name">Apple TV 4K 64GB</p>
                        <p class="accessories-nav-item-price">$199.00</p>
                    </div>
                </div>
                <div href="" class="accessories-nav-item border-radius-shadow hover-style">
                    <i class="nav-item-add fa-solid fa-cart-plus" style="float: right;cursor: pointer;"></i>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/airpods-max-select-skyblue-202011?wid=200&hei=200&fmt=jpeg&qlt=95&.v=1604022365000" alt="" class="accessories-nav-item-img">
                    <ul class="nav-item-color">
                        <li class="nav-item-color-dot"><img class="color-dot-img" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/airpods-max-select-spacegray-202011_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1604622935000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/airpods-max-select-pink-202011_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1603846873000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/airpods-max-select-green-202011_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1603846873000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/airpods-max-select-silver-202011_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1603846873000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/airpods-max-select-skyblue-202011_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1603846875000" alt=""></li>
                    </ul>
                    <div class="fourth-accessory-nav-box">
                        <p class="nav-item-accessories-status">Free Engraving</p>
                        <p class="accessories-nav-item-name">AirPods Max - Sky Blue</p>
                        <p class="accessories-nav-item-price">$549.00</p>
                    </div>
                </div>
                <div href="" class="accessories-nav-item border-radius-shadow hover-style">
                    <i class="nav-item-add fa-solid fa-cart-plus" style="float: right;cursor: pointer;"></i>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MPPJ3?wid=200&hei=200&fmt=jpeg&qlt=95&.v=1662046154499" alt="" class="accessories-nav-item-img">
                    <ul class="nav-item-color">
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-brown" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-spacegray-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037004000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-whiteblue" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-blue-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037003000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-white" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-white-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037006000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-yellow" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-yellow-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037005000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-orange" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-orange-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037003000" alt=""></li>
                    </ul>
                    <div class="fourth-accessory-nav-box">
                        <p class="nav-item-accessories-status">New</p>
                        <p class="accessories-nav-item-name">iPhone 14 Pro Leather Case with MagSafe - Ink</p>
                        <p class="accessories-nav-item-price">$59.00</p>
                    </div>
                </div>
                <a href="" class="fourth-accessories-nav-box border-radius-shadow hover-style">
                    <div class="accessories-nav-item-main">
                        <h4 class="accessories-nav-item-footer">Explore all accessories.</h4>
                    </div>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-accessories-202209?wid=400&hei=500&fmt=png-alpha&.v=1661392144566" alt="" class="accessories-nav-item-img-larger border-radius-shadow">
                </a>
            </div>
        </div>
        <!-- Main fifth additional devices -->
        <div class="main-fifth-additional-devices">
            <h2 class="main-header">Loud and clear. <span class="header-details">Upararelled choices for rich, high-quality sound.</span></h2>
            <div class="fifth-additional-devices-nav overflow-hidden">
                <a href="" class="additional-devices-nav-item-main hover-style">
                    <div class="devices-nav-item-text-box-main">
                        <h4 class="devices-nav-item-header">Get 6 months of Apple Music free.</h4>
                        <p class="devices-nav-item-detail">Included with purchase of select Airpods and Beats products, and HomePds mini.**</p>
                    </div>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-applemusic-202112?wid=400&hei=500&fmt=p-jpg&qlt=95&.v=1638212879000" alt="" class="additional-devices-nav-item-img-larger border-radius-shadow">
                </a>
                <div href="" class="additional-devices-nav-item border-radius-shadow hover-style">
                    <i class="nav-item-add fa-solid fa-cart-plus" style="float: right;cursor: pointer;color:black;"></i>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MQD83?wid=200&hei=200&fmt=jpeg&qlt=95&.v=1660803972361" alt="" class="additional-devices-nav-item-img">
                    <div class="devices-nav-item-text-box">
                        <p class="nav-item-devices-status">New</p>
                        <p class="devices-nav-item-name">Airpods Pro (2nd generation)</p>
                        <p class="devices-nav-item-price">$249.00</p>
                    </div>
                </div>
                <div href="" class="additional-devices-nav-item border-radius-shadow hover-style">
                    <i class="nav-item-add fa-solid fa-cart-plus" style="float: right;cursor: pointer;color:black;"></i>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MU8F2?wid=200&hei=200&fmt=jpeg&qlt=95&.v=1540596407165" alt="" class="additional-devices-nav-item-img">
                    <div class="devices-nav-item-text-box">
                        <p class="nav-item-devices-status">Free Engraving</p>
                        <p class="devices-nav-item-name">Apple Pencil (2nd generation)</p>
                        <p class="devices-nav-item-price">$129.00</p>
                    </div>
                </div>
                <div href="" class="additional-devices-nav-item border-radius-shadow hover-style">
                    <i class="nav-item-add fa-solid fa-cart-plus" style="float: right;cursor: pointer;color:black;"></i>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MMMR3?wid=200&hei=200&fmt=jpeg&qlt=95&.v=1645719947833" alt="" class="additional-devices-nav-item-img">
                    <ul class="nav-item-color">
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-brown" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-spacegray-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037004000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-white" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-white-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037006000" alt=""></li>
                    </ul>
                    <div class="devices-nav-item-text-box">
                        <p class="nav-item-devices-status">New</p>
                        <p class="devices-nav-item-name">Magic Keyboard with Touch ID and Numeric Keypad for Mac...</p>
                        <p class="devices-nav-item-price">$199.00</p>
                    </div>
                </div>
                <div href="" class="additional-devices-nav-item border-radius-shadow hover-style">
                    <i class="nav-item-add fa-solid fa-cart-plus" style="float: right;cursor: pointer;color:black;"></i>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MNA73?wid=200&hei=200&fmt=jpeg&qlt=95&.v=1645642309453" alt="" class="additional-devices-nav-item-img">
                    <ul class="nav-item-color">
                        <li class="nav-item-color-dot"><img class="color-dot-img" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/airpods-max-select-spacegray-202011_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1604622935000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/airpods-max-select-pink-202011_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1603846873000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/airpods-max-select-green-202011_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1603846873000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/airpods-max-select-silver-202011_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1603846873000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/airpods-max-select-skyblue-202011_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1603846875000" alt=""></li>
                    </ul>
                    <div class="devices-nav-item-text-box">
                        <p class="nav-item-devices-status">New</p>
                        <p class="devices-nav-item-name">Smart Folio for iPad Air (5th geneneration) - Marine Blue</p>
                        <p class="devices-nav-item-price">$79.00</p>
                    </div>
                </div>
                <div href="" class="additional-devices-nav-item border-radius-shadow hover-style">
                    <i class="nav-item-add fa-solid fa-cart-plus" style="float: right;cursor: pointer;color:black;"></i>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/MMMQ3?wid=200&hei=200&fmt=jpeg&qlt=95&.v=1645138486301" alt="" class="additional-devices-nav-item-img">
                    <ul class="nav-item-color">
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-brown" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-spacegray-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037004000" alt=""></li>
                        <li class="nav-item-color-dot"><img class="color-dot-img color-dot-white" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/homepod-mini-select-white-202110_SW_COLOR?wid=32&hei=32&fmt=jpeg&qlt=95&.v=1634037006000" alt=""></li>
                    </ul>
                    <div class="devices-nav-item-text-box">
                        <p class="nav-item-devices-status">New</p>
                        <p class="devices-nav-item-name">Magic Mouse - Black Multi-Touch Surface</p>
                        <p class="devices-nav-item-price">$99.00</p>
                    </div>
                </div>
                <div href="" class="additional-devices-nav-item border-radius-shadow hover-style">
                    <i class="nav-item-add fa-solid fa-cart-plus" style="float: right;cursor: pointer;color:black;"></i>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/airtag-4pack-select-202104?wid=200&hei=200&fmt=jpeg&qlt=95&.v=1617761669000" alt="" class="additional-devices-nav-item-img">
                    <div class="devices-nav-item-text-box">
                        <p class="nav-item-devices-status">Free Engraving</p>
                        <p class="devices-nav-item-name">Airtag 4 Pack</p>
                        <p class="devices-nav-item-price">$99.00</p>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Main sixth service -->
        <div class="main-sixth-services">
            <h2 class="main-header">The Apple experience. <span class="header-details">Do even more with Apple products and services.</span></h2>
            <div class="sixth-services-nav overflow-hidden">
                <a href="" class="sixth-services-nav-item hover-style">
                    <h3 class="sixth-services-nav-item-header">Six Apple services. One easy subcription.</h3>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-50-subscriptions-202108_GEO_US?wid=480&hei=500&fmt=p-jpg&qlt=95&.v=1626375546000" alt="" class="sixth-services-nav-item-img-larger border-radius-shadow">
                </a>
                <a href="" class="sixth-services-nav-item hover-style">
                    <p class="sixth-services-status">NEW</p>
                    <h3 class="sixth-services-nav-item-header">We've got you covered</h3>
                    <p class="sixth-services-nav-item-detail">AppleCare+ now comes with unlimited rapairs for accidental damane protection.</p>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-applecare-202209?wid=480&hei=500&fmt=p-jpg&qlt=95&.v=1661982301028" alt="" class="sixth-services-nav-item-img-larger border-radius-shadow">
                </a>
                <a href="" class="sixth-services-nav-item hover-style">
                    <h3 class="sixth-services-nav-item-header">Discover all the ways to use Apple Pay.</h3>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-50-applepay-202209?wid=480&hei=500&fmt=p-jpg&qlt=95&.v=1661873199894" alt="" class="sixth-services-nav-item-img-larger border-radius-shadow">
                </a>
                <a href="" class="sixth-services-nav-item hover-style">
                    <p class="sixth-services-status">HOME</p>
                    <h3 class="sixth-services-nav-item-header">See how one app can control your entire home.</h3>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-50-homekit-202110_GEO_US?wid=480&hei=500&fmt=p-jpg&qlt=95&.v=1634069685000" alt="" class="sixth-services-nav-item-img-larger border-radius-shadow">
                </a>
            </div>
        </div>
        <!-- Main eighth special store -->
        <div class="main-eighth-special-stores">
            <h2 class="main-header">Special Stores. <span class="header-details">Exclusive savings for businesses, school, and more.</span></h2>
            <div class="main-special-stores-nav overflow-hidden">
                <a href="" class="main-special-stores-nav-item hover-style">
                    <p class="main-special-stores-status">EDUCATION</p>
                    <h3 class="main-special-stores-nav-item-header">Save on Mac or iPad with education pricing.<span class="small-upper-word">1</span></h3>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-edu-202108?wid=400&hei=500&fmt=p-jpg&qlt=95&.v=1627492399000" alt="" class="main-special-stores-nav-item-img-larger border-radius-shadow">
                </a>
                <a href="" class="main-special-stores-nav-item hover-style">
                    <p class="main-special-stores-status">BUSINESS</p>
                    <h3 class="main-special-stores-nav-item-header item-header-white">From enterprise to small business, we'll work with you.<span class="small-upper-word">1</span></h3>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-business-202209?wid=400&hei=500&fmt=jpeg&qlt=95&.v=1660927783133" alt="" class="main-special-stores-nav-item-img-larger border-radius-shadow">
                </a>
                <a href="" class="main-special-stores-nav-item hover-style">
                    <p class="main-special-stores-status">GOVERNMENT</p>
                    <h3 class="main-special-stores-nav-item-header">Special pricing is available for stat, local, and federal agencies.<span class="small-upper-word">1</span></h3>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-50-applepay-202209?wid=480&hei=500&fmt=p-jpg&qlt=95&.v=1661873199894" alt="" class="main-special-stores-nav-item-img-larger border-radius-shadow">
                </a>
                <a href="" class="main-special-stores-nav-item hover-style">
                    <p class="main-special-stores-status">VETERANTS AND MILITARY</p>
                    <h3 class="main-special-stores-nav-item-header">Active and veteran members may be eligible for exclusive savings.<span class="small-upper-word">1</span></h3>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-veterans-202209?wid=400&hei=500&fmt=p-jpg&qlt=95&.v=1660768695429" alt="" class="main-special-stores-nav-item-img-larger border-radius-shadow">
                </a>
                <a href="" class="main-special-stores-nav-item hover-style">
                    <p class="main-special-stores-status">CERTIFIED REFURBISHED</p>
                    <h3 class="main-special-stores-nav-item-header">Shop refurbished Apple products backed by a one-year warranty.<span class="small-upper-word">1</span></h3>
                    <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/store-card-40-refurb-202108?wid=400&hei=500&fmt=p-jpg&qlt=95&.v=1627318783000" alt="" class="main-special-stores-nav-item-img-larger border-radius-shadow">
                </a>
            </div>
        </div>

        <!-- Quick links -->
        <div class="main-eighth-quicklinks">
            <h2 class="eight-text-quicklinks">Quick Links</h2>
            <div class="eighth-quicklinks-nav">
                <a href="" class="quicklinks-nav-button">Order Status</a>
                <a href="" class="quicklinks-nav-button">Shopping Help</a>
                <a href="" class="quicklinks-nav-button">Returns</a>
            </div>

            <p class="eight-quicklinks-explaination">
                * Pricing for iPhone 14 and iPhone 14 Plus includes a $30 connectivity discount that requires activation with AT&T, T-Mobile, Sprint, or Verizon. Available to qualified customers and requires 24-month installment loan when you select Citizens One or Apple Card Monthly Installments (ACMI) as payment type at checkout at Apple. iPhone activation required with AT&T, T-Mobile, Sprint, or Verizon for purchases made with ACMI at an Apple Store. Subject to credit approval and credit limit. Taxes and shipping are not included in ACMI and are subject to your card’s variable APR. Additional Apple Card Monthly Installments terms are in the <a href="" class="hover-underline none-address-style" style="color: #6E6E73;">Apple Card Customer Agreement</a>. Additional iPhone Payments terms are here. ACMI is not available for purchases made online at special storefronts. The last month’s payment for each product will be the product’s purchase price, less all other payments at the monthly payment amount.
                <br><br>** Offer is available for new subscribers who connect an eligible device to an Apple device running iOS 15 or iPadOS 15 or later, for a limited time only. Offer good for 3 months after eligible device pairing. Plan automatically renews at your region’s price per month until cancelled. No purchase necessary for current owners of eligible devices. Service availability varies by region. Restrictions and other terms apply.
                <br><br>◊ Apple Card Monthly Installments (ACMI) is a 0% APR payment option available only in the U.S. to select at checkout for certain Apple products purchased at Apple Store locations, apple.com(Opens in a new window), the Apple Store app, or by calling 1-800-MY-APPLE, and is subject to credit approval and credit limit. See https://support.apple.com/kb/HT211204(Opens in a new window) for more information about eligible products. Variable APRs for Apple Card other than ACMI range from 13.24% to 24.24% based on creditworthiness. Rates as of August 1, 2022. If you choose the pay-in-full or one-time-payment option for an ACMI-eligible purchase instead of choosing ACMI as the payment option at checkout, that purchase will be subject to the variable APR assigned to your Apple Card. Taxes and shipping are not included in ACMI and are subject to your card’s variable APR. See the Apple Card Customer Agreement(Opens in a new window) for more information. ACMI is not available for purchases made online at the following special stores: Apple Employee Purchase Plan; participating corporate Employee Purchase Programs; Apple at Work for small businesses; Government, and Veterans and Military Purchase Programs, or on refurbished devices. iPhone activation required on iPhone purchases made at an Apple Store with one of these national carriers: AT&T, Sprint, Verizon, or T-Mobile.
                <br><br>† Monthly pricing is available when you select Apple Card Monthly Installments (ACMI) as payment type at checkout at Apple, and is subject to credit approval and credit limit. Financing terms vary by product. Taxes and shipping are not included in ACMI and are subject to your card’s variable APR. See the Apple Card Customer Agreement for more information. ACMI is not available for purchases made online at special storefronts. The last month’s payment for each product will be the product’s purchase price, less all other payments at the monthly payment amount.
                <br><br>To access and use all the features of Apple Card, you must add Apple Card to Wallet on an iPhone or iPad with the latest version of iOS or iPadOS. Update to the latest version by going to Settings > General > Software Update. Tap Download and Install.
                <br><br>Available for qualifying applicants in the United States.
                <br><br>Apple Card is issued by Goldman Sachs Bank USA, Salt Lake City Branch.
                <br><br>1. Special pricing available to qualified customers. To learn more about how to start qualifying toward special pricing, talk to an Apple Specialist in a store or give us a call at 1‑800‑MY‑APPLE.
                <br><br>†† We approximate your location from your internet IP address by matching it to a geographic region or from the location entered during your previous visit to Apple.
            </p>
        </div>
    </main>
    <!-- FOOTER -->
    <footer class="global-footer">
        <!-- footer header -->
        <div class="footer-line"></div>
        <div class="footer-header">
            <div class="footer-header-position">
                <a href="" class="header-position-icon"><i class="fa-brands fa-apple"></i></a>
                <i class="fa-solid fa-angle-right"></i>
                <p class="header-position-current">Apple Store Online</p>
            </div>
        </div>
        <!-- footer nav -->
        <div class="footer-nav">
            <ul class="footer-unordered-list footer-nav-shop-and-learn">
                <p class="nav-about-header nav-shop-and-learn-header">Shop and Learn</p>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Mac</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">iPad</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">iPhone</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Watch</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">AirPods</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">TV & Home</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">AirTag</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Accessories</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Gift Cards</a></li>
            </ul>
            <ul class="footer-unordered-list footer-nav-services">
                <p class="nav-about-header nav-services-item">Services</p>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Apple Music</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Apple TV+</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Apple Fitness+</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Apple News+</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Apple Arcade</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">iCloud+</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Apple One</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Apple Card</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Apple Books</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Apple Podcasts</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Apple Store</a></li>
            </ul>
            <ul class="footer-unordered-list footer-nav-account">
                <p class="nav-about-header nav-account-item">Account</p>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Manage your Apple ID</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Apple Store Account</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">iCloud.com</a></li>
            </ul>
            <ul class="footer-unordered-list footer-nav-apple-store">
                <p class="nav-about-header nav-apple-store-item">Apple Store</p>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Find a Store</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Genius Bar</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Today at Apple</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Apple Camp</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Apple Store App</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Refurished and Clearance</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Financing</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Apple Trade In</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Order Status</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Shopping Help</a></li>
            </ul>
            <ul class="footer-unordered-list footer-nav-for-business">
                <p class="nav-about-header nav-for-business-item">For Business</p>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Apple and Business</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Apple for Business</a></li>
            </ul>
            <ul class="footer-unordered-list footer-nav-for-education">
                <p class="nav-about-header nav-for-education-item">For Education</p>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Apple and Education</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Shop for K-12</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Shop for College</a></li>
            </ul>
            <ul class="footer-unordered-list footer-nav-for-healthcare">
                <p class="nav-about-header nav-for-healthcare-item">For Healthcare</p>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Apple in Healthcare</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Health on Apple Watch</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Health Records on iPhone</a></li>
            </ul>
            <ul class="footer-unordered-list footer-nav-for-government">
                <p class="nav-about-header nav-for-governemnt-item">For Government</p>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Shop for Government</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Shop for Veterans and Military</a></li>
            </ul>
            <ul class="footer-unordered-list footer-nav-apple-values">
                <p class="nav-about-header nav-for-apple-values-item">Apple Values</p>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Accessibility</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Education</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Environment</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Inclusion and Diversity</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Privacy</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Racial Equity and Justice</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Supplier Responsibility</a></li>
            </ul>
            <ul class="footer-unordered-list footer-nav-about-apple">
                <p class="nav-about-header nav-about-apple-item">About Apple</p>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Newsroom</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Apple Leadership</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Career Opportunities</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Investors</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Ethics & Compliance</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Events</a></li>
                <li><a class="nav-about-list hover-underline none-address-style" href="">Contact Apple</a></li>
            </ul>

        </div>
        <!-- footer more detail -->
        <p class="footer-more-detail">More ways to shop: <a href="" style="text-decoration: none; color: #0066CC;">Find an Apple Store</a> or <a href="" style="text-decoration: none; color: #0066CC;">other retailer</a> near you. Or call 1-800-MY-APPLE</p>
        <div class="footer-line"></div>
        <div class="footer-legal">
            <div class="footer-legal-list">
                <p class="legal-list-copyright">Copyright © 2022 Apple Inc. All rights reserved.</p>
                <ul class="legal-list-nav">
                    <li><a class="legal-list-nav-item hover-underline none-address-style" href="">Privacy Policy</a></li>
                    <li><a class="legal-list-nav-item hover-underline none-address-style" href="">Terms of Use</a></li>
                    <li><a class="legal-list-nav-item hover-underline none-address-style" href="">Sales and Refunds</a></li>
                    <li><a class="legal-list-nav-item hover-underline none-address-style" href="">Legal</a></li>
                    <li><a class="legal-list-nav-item hover-underline legal-list-nav-item-noborder none-address-style" href="">Site Map</a></li>
                </ul>
                <p class="vietnam">Vietnam</p>
            </div>
        </div>
    </footer>
<script src="main.js"></script>
</body>
</html>