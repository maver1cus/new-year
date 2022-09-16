import init from "./components/map";
// @ts-ignore
import.meta.glob([
  '../../images/**'
]);

// @ts-ignore
ymaps.ready(init);
