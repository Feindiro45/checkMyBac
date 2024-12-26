   <!-- Menu -->

   <aside
   id="layout-menu"
   class="layout-menu menu-vertical menu bg-menu-theme"
 >
   <div class="app-brand demo">
     <a href="{{ url('admin/dashboard') }}" class="app-brand-link">
       <img src="{{ asset('frontend/img/Image1.png') }}" alt="" width="130px" style="margin-left:40px;padding-bottom:10px;">
     </a>

     <a
       href="javascript:void(0);"
       class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none"
     >
       <i class="bx bx-chevron-left bx-sm align-middle"></i>
     </a>
   </div>

   <div class="menu-inner-shadow"></div>

   <ul class="menu-inner py-1">
     <!-- Dashboard -->
     <li class="menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
       <a href="{{ route('dashboard') }}" class="menu-link">
         <i class="menu-icon tf-icons bx bx-home-circle"></i>
         <div>Tableau de bord</div>
       </a>
     </li>

     <li class="menu-header small text-uppercase">
       <span class="menu-header-text text-black">Session d'examen</span>
     </li>
     <li class="menu-item">
       <a href="{{ url('admin/year') }}" class="menu-link">
         <i class="menu-icon tf-icons bx bx-dock-top"></i>
         <div>Liste des session</div>
       </a>
     </li>
     <!-- Components -->
     <li class="menu-header small text-uppercase">
       <span class="menu-header-text text-black">Centre d'examen</span>
     </li>
     <!-- Cards -->
     <li class="menu-item">
       <a href="{{ url('admin/centre_examen') }}" class="menu-link">
         <i class="menu-icon tf-icons bx bx-dock-top"></i>
         <div>Liste des centres</div>
       </a>
     </li>
     <!-- User interface -->
     <li class="menu-item">
       <a href="javascript:void(0)" class="menu-link">
         <i class="menu-icon tf-icons bx bx-plus-circle"></i>
         <div>Ajouter un centre</div>
       </a>
     </li>

     <!-- Forms & Tables -->
     <li class="menu-header small text-uppercase">
       <span class="menu-header-text text-black">Résultats</span>
     </li>
     <!-- Forms -->
     <li class="menu-item">
       <a href="javascript:void(0);" class="menu-link">
         <i class="menu-icon tf-icons bx bx-dock-top"></i>
         <div>Liste des résultats</div>
       </a>
     </li>
     <li class="menu-item">
       <a href="javascript:void(0);" class="menu-link">
         <i class="menu-icon tf-icons bx bx-plus-circle"></i>
         <div>Ajouter un résultats</div>
       </a>
     </li>

     <li class="menu-header small text-uppercase">
       <span class="menu-header-text text-black">Compte utilisateur</span>
     </li>
     <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link">
          <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div>Liste des comptes</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link">
          <i class="menu-icon tf-icons bx bx-plus-circle"></i>
          <div>Ajouter un compte</div>
        </a>
      </li>
   </ul>
 </aside>
 <!-- / Menu -->
