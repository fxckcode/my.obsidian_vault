### useContext
Hook que sirve para guardar contextos y poderlos usar en los componentes hijos, uso:
```jsx
// App.jsx
import React from 'react';

const userContext = React.createContext();
const user = 'Diego'
return (
	<userContext.Provider value={user}>
		<Hijos />
	<userContext.Provider/>
)
```
```jsx
/// Hijos.jsx
import {useContext} from 'react';
import userContext from '../App.jsx'
const user = useContext(userContext)
return (
	<p>{user}</p>
)
```

### useRef
Sirve para guardar una referencia que tiene como caracteristica la "permanecia" osea que sin importar que se recargue el componente el valor persiste, uso:
```jsx
import {useRef} from 'react';

const inputRef = useRef()

const toggleValue = () => {
	console.log(inputRef.current.value)
}

return (
	<>
		<input type="text" ref={inputRef} />
		<button onClick={toggleValue}></button>
	</>
)
```

### UseReducer
Hook encargardo de cambiar el estado como un useState pero con la diferencia de que implementa una cabezera o  `type:{}` la cual sirve para hacer diferentes acciones en a la hora de usar un formulario.

### AxiosClient
Configuración que permite mandar el Bearer `token` por defecto y así permitir autenticarse siempre que se haga una petición, código:
```javascript
import axios from "axios";

import {useStateContext} from "./context/ContextProvider.jsx";

const axiosClient = axios.create({
  baseURL: `http://127.0.0.1:8000/api`
}) // Le da la variable @axiosClient la posibilidad de comportarse como axios con todas sus instancias 

axiosClient.interceptors.request.use((config) => {
  const token = localStorage.getItem('ACCESS_TOKEN');
  config.headers.Authorization = `Bearer ${token}`
  return config;
}) // Declara como configuración por defecto la estracción del token para luego ser mandado como cabecera en cualquier petición

axiosClient.interceptors.response.use((response) => {
  return response // Declara la comprobación del token el cual espera una respuesta si en el caso el token no sea el correcto remueve el supuesto token del localStorage para que cierre sesión automaticamente
}, (error) => {
  const {response} = error;
  if (response.status === 401) {
    localStorage.removeItem('ACCESS_TOKEN')
    // window.location.reload();
  } else if (response.status === 404) {
    //Show not found
  }
  throw error;
})
export default axiosClient
```

Abstract API
1908d62f010349bc9fb7fa92c76f8331
https://app.abstractapi.com/api/timezone/documentation