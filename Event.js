function clear(elements){
      $(`#${elements}`).remove();
    }
function inspect(query){
      $.getJSON('database.json',function(json){
        let anu = query;
        let note = json[anu];
        let judul = note.title;
        let update = note.LastUpdate;
        let isi = note.isi;
        let charText = isi.length;
        $("#body").before(`<div id="${anu}" class="notes px-3 py-3"><span class="" id="clearDiv"></span><small class="text-muted">${update} | ${charText} Characters</small><h1 class="mb-3 bold"><b>${judul}</b></h1><p>${isi}</p></div>`);
        let entah = 3
       let x = setInterval(function(){
         $("#clearDiv").html(entah);
         entah--;
       },1000)
        setTimeout(function(){
          clearInterval(x);
          clear(anu);
        }, 5000);
      })
    }