function clear(elements){
    $(`#${elements}`).remove();
    $("#makeNote").css("position","absolute");
}
function inspect(query){
  $("#makeNote").css("position","static");
      $.getJSON('database.json',function(json){
        let anu = query;
        let note = json[anu];
        let judul = note.title;
        let update = note.LastUpdate;
        let isi = note.isi;
        let img = note.hero;
        let charText = isi.length;
        $("#noteList").before(`<div class="notes" id="${anu}"><div class="card px-3 py-3"><small class="border-bottom text-muted">${update} | ${charText} Characters</small><a class="text-decoration-none" href=""><button id="clearDiv" class="btn outline-info" style="z-index:1;">⌫</button></a><h1 class="mb-2 mt-2 bold"><b>${judul}</b></h1><a href="${img}"><img class="img-fluid mb-2" src="${img}"/></a><p class="paragraf">${isi}</p></div></div>`);
        /* let lama = Math.ceil((charText*100)+5000);
        let coutdown = Math.ceil((lama/1000-3)+1);
        let x = setInterval(function(){
        let m = Math.floor(coutdown/60);
        let s = Math.floor(coutdown%60);
         $("#clearDiv").html(m+"m "+s+"s");
         coutdown--;
       },1000)
       setTimeout(function() {
           clearInterval(x);
           clear(anu);
       }, lama);*/
      })
    }
function show(){
  var counter = 0;
$.getJSON("database.json",function(data){
  let database=data;
  let total = database.length;
  var x=setInterval(function(){
    if(counter==total){
      clearInterval(x);
    }else{
      counter++;
      let note=database[counter];
      let isi1 = note.isi;
      let isi=isi1.slice(0,48);
      try {
        $(`#p_${counter}`).html(isi);
      } catch (e) {
        alert(e);
      }
      $
    }
  },300)
}).catch(Error => console.log("something wrong!"))
}
show();