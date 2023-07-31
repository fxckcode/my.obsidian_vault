- [x] Autenticación (Registro, login, logout)
- [x] Unidades de medida
	- [x] Post/Delete/Update **Solo administradores**
- [x] Categorias
	- [x] Post/Delete/Update **Solo administradores**
- [x] Productos (con consultas especiales)
	- [x] Post/Delete/Update **Solo administradores**
- [x] Usuarios
	- [x] **Solo administradores**
	- [x] Middleware para que solo puedan administradores
- [ ] Horarios **Seeder predeterminado + Controlador para administradores**
- [ ] Pedidos
- [ ] Middleware que verifique los horarios y monitoree a PedidosController
- [ ] Documentar todo lo anterior

<hr>

# Ideas
- Pedidos que se manejaran en una tabla ligados al id del producto y del usuario **En ese controlador se le añade un middleware para el tema de atención y funcionamiento**

# Posibles
- Facturación (Generar facturas)
- Descuento de stok
- Rango de precios