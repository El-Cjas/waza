INSERT INTO categoria (nombre, descripcion) VALUES
('Electrónica', 'Artículos electrónicos como teléfonos y computadoras'),
('Alimentos', 'Productos comestibles con o sin refrigeración'),
('Ropa', 'Prendas de vestir para todas las edades'),
('Hogar', 'Productos para el hogar y limpieza');

INSERT INTO producto (nombre, codigo, precio, stock, ID_categoria) VALUES
('Laptop Lenovo', 'LEN-4521', 750.00, 10, 1),
('Smartphone Samsung', 'SAM-A55', 420.00, 15, 1),
('Manzanas rojas', 'ALM-100', 3.50, 50, 2),
('Arroz Premium 1kg', 'ARZ-500', 1.20, 100, 2),
('Camiseta Negra', 'ROP-900', 12.99, 40, 3),
('Pantalón Jeans', 'ROP-901', 25.00, 30, 3),
('Detergente Líquido 2L', 'HOG-330', 6.80, 25, 4),
('Esponja Multiuso', 'HOG-331', 0.80, 100, 4);

INSERT INTO movimiento (producto_id, tipo, cantidad, observaciones) VALUES
(1, 1, 5, 'Reposición de laptops'),
(2, 0, 3, 'Venta de smartphones'),
(3, 1, 20, 'Ingreso de frutas frescas'),
(4, 0, 10, 'Salida para mayorista'),
(5, 1, 15, 'Nueva mercancía de camisetas'),
(6, 0, 5, 'Venta en tienda'),
(7, 1, 8, 'Reabastecimiento de detergente'),
(8, 0, 30, 'Salida por pedidos del día');
