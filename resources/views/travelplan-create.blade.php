
 <div class="contenido d-flexs">
   @if ($errors)
     @foreach ($errors->all() as $error)
       <p>{{ $error }}</p>
     @endforeach
   @endif

   <style media="screen">
   .panel-shadow {
     box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;
   }
   .panel-white {
     border: 1px solid #dddddd;
   }
   .panel-white  .panel-heading {
     color: #333;
     background-color: #fff;
     border-color: #ddd;
   }
   .panel-white  .panel-footer {
     background-color: #fff;
     border-color: #ddd;
   }

   .post .post-heading {
     height: 95px;
     padding: 20px 15px;
   }
   .post .post-heading .avatar {
     width: 60px;
     height: 60px;
     display: block;
     margin-right: 15px;
   }
   .post .post-heading .meta .title {
     margin-bottom: 0;
   }
   .post .post-heading .meta .title a {
     color: black;
   }
   .post .post-heading .meta .title a:hover {
     color: #aaaaaa;
   }
   .post .post-heading .meta .time {
     margin-top: 8px;
     color: #999;
   }
   .post .post-image .image {
     width: 100%;
     height: auto;
   }
   .post .post-description {
     padding: 15px;
   }
   .post .post-description p {
     font-size: 14px;
   }
   .post .post-description .stats {
     margin-top: 20px;
   }
   .post .post-description .stats .stat-item {
     display: inline-block;
     margin-right: 15px;
   }
   .post .post-description .stats .stat-item .icon {
     margin-right: 8px;
   }
   .post .post-footer {
     border-top: 1px solid #ddd;
     padding: 15px;
   }
   .post .post-footer .input-group-addon a {
     color: #454545;
   }
   .post .post-footer .comments-list {
     padding: 0;
     margin-top: 20px;
     list-style-type: none;
   }
   .post .post-footer .comments-list .comment {
     display: block;
     width: 100%;
     margin: 20px 0;
   }
   .post .post-footer .comments-list .comment .avatar {
     width: 35px;
     height: 35px;
   }
   .post .post-footer .comments-list .comment .comment-heading {
     display: block;
     width: 100%;
   }
   .post .post-footer .comments-list .comment .comment-heading .user {
     font-size: 14px;
     font-weight: bold;
     display: inline;
     margin-top: 0;
     margin-right: 10px;
   }
   .post .post-footer .comments-list .comment .comment-heading .time {
     font-size: 12px;
     color: #aaa;
     margin-top: 0;
     display: inline;
   }
   .post .post-footer .comments-list .comment .comment-body {
     margin-left: 50px;
   }
   .post .post-footer .comments-list .comment > .comments-list {
     margin-left: 50px;
   }

   </style>


   <form action="/travelplan"  enctype="multipart/form-data" method="POST">
     {{ csrf_field() }}
     <ul class="list-group">
       <li class="border rounded border-info p-3 m-4">



         <div class="container bootstrap snippet">
           <div class="col-sm-8">
             <div class="panel panel-white post ">
               <div class="post-heading">
                 <div class="pull-left image">
                   <!-- PONER AVATAR DEL USUARIO ACA ABAJO -->
                   <img src="https://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                 </div>
                 <div class="pull-left meta">
                   <div class="title h5">
                     <a href="#"><b>{{Auth::user()->name}}</b></a>
                     made a new travelplan.
                   </div>
                   <h6 class="text-muted time">1 minute ago</h6>
                 </div>
               </div>


               <div class="post-description">
                   <textarea name="destino" class="form-control" placeholder="Adonde vas?" type="text"></textarea>
                   {{-- <input class="form-control" placeholder="Adonde vas?" type="text"> --}}
                   <span class="input-group-addon">
                     <a href="#"><i class="fa fa-edit"></i></a>
                   </span>
                   <textarea name="fecha_de_salida" class="form-control" placeholder="Cuando te vas? yyyy-mm-dd" type="date"></textarea>
                   {{-- <input class="form-control" placeholder="Cuando te vas?" type="date"> --}}
                   <span class="input-group-addon">
                     <a href="#"><i class="fa fa-edit"></i></a>
                   </span>
                   <textarea name="fecha_de_regreso" class="form-control" placeholder="Cuando volves? yyyy-mm-dd" type="date"></textarea>
                   {{-- <input class="form-control" placeholder="Cuando volves?" type="date"> --}}
                   <span class="input-group-addon">
                     <a href="#"><i class="fa fa-edit"></i></a>
                   </span>
                   <textarea name="presupuesto" class="form-control" placeholder="Cuanto vas a gastar?" type="integer"></textarea>
                   {{-- <input class="form-control" placeholder="Cuanto vas a gastar?" type="integer"> --}}
                   <span class="input-group-addon">
                     <a href="#"><i class="fa fa-edit"></i></a>
                   </span>
                   <textarea name="detalle" class="form-control" placeholder="Que vas a hacer en tu viaje?" type="text"></textarea>
                   {{-- <input class="form-control" placeholder="Que vas a hacer en tu viaje?" type="text"> --}}
                   <span class="input-group-addon">
                     <a href="#"><i class="fa fa-edit"></i></a>
                   </span>
                 <button class= "btn btn-primary"type="submit" name="button">Crear</button>
               </div>
             </div>
           </div>
         </div>



       </li>
     </ul>

   </form>









 </div>
