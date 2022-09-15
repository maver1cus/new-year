import init from "./components/map";

import.meta.glob([
  '../../images/**'
]);

// @ts-ignore
ymaps.ready(init);

