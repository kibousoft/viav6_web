# viav6.kibousoft.co.jp

## How to use

```
<span id="kibousoft-viav6"></span>
<script type="text/javascript">
var xhr = new XMLHttpRequest();
xhr.open('GET', 'https://viav6.kibousoft.co.jp/', true);
xhr.onreadystatechange = function(){
if (xhr.readyState === 4 && xhr.status === 200){
   var dom = document.getElementById('kibousoft-viav6');
   dom.innerHTML = xhr.responseText;
 }
};
xhr.send(null);
</script>
```

## More info

http://qiita.com/ANNotunzdY/items/17805a4d7a2d797822ea


## SVG Design

https://shields.io
