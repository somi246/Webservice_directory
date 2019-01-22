
<div class="row p-5">
  <div class="col-xl-5 col-sm-5 mb-5"></div>
  <div class="col-xl-2 col-sm-2 mb-2"> @include("custom_inc.icon_cards.icon_card_edit") </div>
  <div class="col-xl-5 col-sm-5 mb-5"></div>
</div>

<div class="row p-5">
  <div class="col-xl-4 col-sm-4 mb-4 p-5"> @include("custom_inc.icon_cards.icon_card_about") </div>

  <div class="col-xl-4 col-sm-4 mb-4 p-5"> 
      @if(!empty($isManager) && $isManager)
        @include("custom_inc.icon_cards.icon_card_manage")
      @endif
  </div>

  <div class="col-xl-4 col-sm-4 mb-4 p-5"> @include("custom_inc.icon_cards.icon_card_contact") </div>
</div>

<div class="row p-5">
  <div class="col-xl-5 col-sm-5 mb-5"></div>
  <div class="col-xl-2 col-sm-2 mb-2"> @include("custom_inc.icon_cards.icon_card_update") </div>
  <div class="col-xl-5 col-sm-5 mb-5"></div>
 </div>

