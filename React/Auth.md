Se crea un context en el cual verifica si existe el token con el fin de que el no existir le token de una vez retorn al `/login` 
```jsx
import {createContext, useContext, useState} from "react";
const StateContext = createContext({ // Crear un contexto encargado de dar el tipo de valor que recibe por defecto o su valor inicial
  currentUser: null,
  token: null, // El token inicializa en nulo
  notification: null,
  setUser: () => {},
  setToken: () => {},
  setNotification: () => {}
})

export const ContextProvider = ({children}) => {
  const [user, setUser] = useState({});
  const [token, _setToken] = useState(localStorage.getItem('ACCESS_TOKEN'));
  const [notification, _setNotification] = useState('');
  const setToken = (token) => {
    _setToken(token)
    if (token) {
      localStorage.setItem('ACCESS_TOKEN', token); //  Si existe el token, sigue permaneciendo guardado
    } else {
      localStorage.removeItem('ACCESS_TOKEN'); // En caso que no exista, remueve el token del localStorage
    }
  }
  const setNotification = message => {
    _setNotification(message);
    setTimeout(() => {
      _setNotification('')
    }, 5000)
  }
  return (
    <StateContext.Provider value={{ // Declara los valores que va a tener el context
      user,
      setUser,
      token,
      setToken,
      notification,
      setNotification
    }}>
      {children} // Declara que dentro de ella va los hijos que se quieran poner
    </StateContext.Provider>
  );
}
export const useStateContext = () => useContext(StateContext); // exporta el contexto creado
```