import icon from '../../../images/ic.png';

var myMap;

function init() {
  console.log(icon);
  // @ts-ignore
  const map = new ymaps.Map('YMapsID', {
    center: [55.76, 37.64],
    controls: ['geolocationControl', 'routeButtonControl', 'typeSelector', 'fullscreenControl', 'zoomControl'],
    zoom: 10
  });

  const control = map.controls.get('routeButtonControl');
  // @ts-ignore
  const myPlacemark = new ymaps.Placemark([55.717687, 37.181264], {}, {
    iconLayout: 'default#image',
    iconImageHref: `${icon}`,
    iconImageSize: [30, 42],
    iconImageOffset: [-3, -42]
  });

  control.routePanel.state.set('to', '55.717687, 37.181264');
  map.geoObjects.add(myPlacemark);
}

export default init;
