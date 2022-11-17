<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<form id="form" method="$_POST" action="" class="row g-3">
     <div class="col-md-12">
      <h2>Новая заявка</h2>
       <label for="inputEmail4" class="form-label">Заголовки заявки</label>
       <input type="text" class="form-control" name="requestName" id="inputEmail4">
     </div>
     <h2>Категория</h2>
     <div>
  <input class="form-check-input" type="radio" name="category" id="radioNoLabel1" value="Масла,автохимия,фильтры.Автоаксессуары,обогреватели,сопутствующие товары" aria-label="...">
  Масла,автохимия,фильтры.Автоаксессуары,обогреватели,сопутствующие товары
</div>
<div>
  <input class="form-check-input" type="radio" name="category" id="radioNoLabel1" value="Шины,диски" aria-label="...">
Шины,диски
</div>
<h2 >Вид заявки</h2>
<div>
<input class="form-check-input" type="radio" name="radioRequest" id="radioNoLabel1" value="Запрос цены и сроков поставки" aria-label="...">
Запрос цены и сроков поставки
</div>
<div>
<input class="form-check-input" type="radio" name="radioRequest" id="radioNoLabel1" value="Пополнение складов" aria-label="...">
Пополнение складов
</div>
<div>
<input class="form-check-input" type="radio" name="radioRequest" id="radioNoLabel1" value="Спецзаказ" aria-label="...">
Спецзаказ
</div>
<h2>Склад поставки</h2>
<div class="col-md-6">
<select name="optionSklad" class="form-select" aria-label="Default select example">
  <option selected>(Выберите склад поставки)</option>
  <option name="option" value="Склад1">Склад1</option>
  <option name="option" value="Склад2">Склад2</option>
  <option name="option" value="Склад3">Склад3</option>
</select>
</div>
<h2>Состав заявки</h2>
<div  id="request-containers-add" class="row col-md-12 request-containers-add  row">
<div class="col-md-4">
       <label for="inputCity" class="form-label text-danger">Бренд</label>
       <select  name="optionBrend" class="form-select" aria-label="Default select example">
  <option selected>Выберите бренд</option>
  <option value="Бренд1">Бренд1</option>
  <option value="Бренд2">Бренд2</option>
  <option value="Бренд3">Бренд3</option>
</select>
     </div>
     
     
     <div class="col-md-4">
       <label for="inputCity" class="form-label text-danger">Наименование</label>
       <input type="text" class="form-control" name="brand" id="inputCity" placeholder="">
     </div>
     <div class="col-md-4">
       <label for="inputCity" class="form-label text-danger">Количество</label>
       <input type="text" class="form-control" name="sum" id="inputCity" placeholder="">
     </div>

     <div class="col-md-4">
       <label for="inputCity" class="form-label text-danger">Фасовка</label>
       <input type="text" class="form-control" name="fas" id="inputCity" placeholder="">
     </div>
     <div class="col-md-4">
       <label for="inputCity" class="form-label text-danger">Клиент</label>
       <input type="text" class="form-control" name="client" id="inputCity" placeholder="">
     </div>
     <div class="col-md-4">
     <button  class="btn btn-primary mt-4 mb-3 button-add">+</button>
     <button  class="btn btn-primary mt-4 mb-3 button-add">-</button>
     </div>
     <div class="mb-3">
 
  <input class="form-control" name="file" type="file" id="formFile">
</div>


<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Комментарий</label>
  <textarea name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

<div class="col-auto">
    <button id="form-button"  type="submit" class="btn btn-primary mb-3">Отправить</button>
  </div>
   </form>
 
    
<script>
$('.button-add').click(function() {
  $('.request-containers-add').append($('<div  id="request-container-add" class="row col-md-12 request-container-add  row"><div class="col-md-4"> <label for="inputCity" class="form-label">Бренд</label> <select  name="optionBrend" class="form-select" aria-label="Default select example"><option selected>Выберите бренд</option> <option value="Бренд1">Бренд1</option> <option value="Бренд2">Бренд2</option> <option value="Бренд3">Бренд3</option></select></div>     <div class="col-md-4"> <label for="inputCity" class="form-label">Наименование</label><input type="text" class="form-control" name="brand" id="inputCity" placeholder=""></div> <div class="col-md-4"><label for="inputCity" class="form-label">Количество</label><input type="text" class="form-control" name="sum" id="inputCity" placeholder=""></div> <div class="col-md-4"><label for="inputCity" class="form-label">Фасовка</label><input type="text" class="form-control" name="fas" id="inputCity" placeholder=""> </div> <div class="col-md-4"><label for="inputCity" class="form-label">Клиент</label><input type="text" class="form-control" name="client" id="inputCity" placeholder="">', {
   }));
});
$('.button-add').click(function() {
  $('.request-containers-add').remove($('<div  id="request-container-add" class="row col-md-12 request-container-add  row"><div class="col-md-4"> <label for="inputCity" class="form-label">Бренд</label> <select  name="optionBrend" class="form-select" aria-label="Default select example"><option selected>Выберите бренд</option> <option value="Бренд1">Бренд1</option> <option value="Бренд2">Бренд2</option> <option value="Бренд3">Бренд3</option></select></div>     <div class="col-md-4"> <label for="inputCity" class="form-label">Наименование</label><input type="text" class="form-control" name="brand" id="inputCity" placeholder=""></div> <div class="col-md-4"><label for="inputCity" class="form-label">Количество</label><input type="text" class="form-control" name="sum" id="inputCity" placeholder=""></div> <div class="col-md-4"><label for="inputCity" class="form-label">Фасовка</label><input type="text" class="form-control" name="fas" id="inputCity" placeholder=""> </div> <div class="col-md-4"><label for="inputCity" class="form-label">Клиент</label><input type="text" class="form-control" name="client" id="inputCity" placeholder="">', {
   }));
});
</script>