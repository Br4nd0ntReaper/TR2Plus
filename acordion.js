const items = document.querySelectorAll(".item");
let imageURLs = [
  "imagenes/otaku.jpg",
  "imagenes/programadora.jpg",
  "imagenes/juegos.jpg",
  "imagenes/componentes.jpg",
  "imagenes/tienda.jpg",
];
//initially empty
let deviceType = "";
let events = {
  mouse: {
    start: "mouseover",
    end: "mouseout",
  },
  touch: {
    start: "touchstart",
    end: "touchend",
  },
};
const isTouchDevice = () => {
  try {
    document.createEvent("TouchEvent");
    deviceType = "touch";
    return true;
  } catch (e) {
    deviceType = "mouse";
    return false;
  }
};
isTouchDevice();
items.forEach((item, index) => {
  const img = document.createElement("img");
  img.setAttribute("src", imageURLs[index]);
  img.style.width = "100%";
  img.style.height = "100%";
  img.style.objectFit = "cover";
  // Crear un enlace y establecer el atributo href
  const link = document.createElement("a");
  link.setAttribute("href", item.getAttribute("data-url"));
  link.appendChild(img);

  // Agregar el enlace al elemento del ítem
  item.appendChild(link);
  //Initial CSS properties for all items
  item.style.flex = "1";
  item.style.transition = "flex 0.8s ease";
  item.addEventListener(events[deviceType].start, () => {
    item.style.flex = "9"; //Expand the item
  });
  item.addEventListener(events[deviceType].end, () => {
    item.style.flex = "1"; //Contract the item
  });
});

