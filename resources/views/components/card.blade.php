<div class="formulas-card">
    <h5 class="formul-title">
      {{$card->name}}
    </h5>

    <div class="formul-img">
      <img src="{{asset('storage/images/formuls/'.$card->image)}}" alt="">
    </div>

    <a href="{{ route('page.show',$card->id) }}" class="formul-btn">
      Подробнее
    </a>

    <button class="getFavorites" onclick="this.classList.toggle('heart-icon')">
      <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="none"><path fill="#5b5f65" fill-opacity=".38" d="M19.833 5.25c-2.45 0-4.608 1.225-5.833 3.15-1.225-1.925-3.383-3.15-5.833-3.15-3.85 0-7 3.15-7 7 0 6.942 12.833 14 12.833 14s12.833-7 12.833-14c0-3.85-3.15-7-7-7Z"/></svg>
    </button>
  </div>