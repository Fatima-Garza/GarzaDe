#Propiedades de FlexBox

- Flexbox es un sistema de elementos flexibles que llega con la idea de olvidar estos mecanismos y acostumbrarnos a una mecánica más potente, limpia y personalizable, en la que los elementos HTML se adaptan y colocan automáticamente y es más fácil personalizar los diseños. Está especialmente diseñado para crear, mediante CSS, estructuras de una sóla dimensión.

<br>

## Propiedades

| Valor          | Descripcion                                                                         |
| -------------- | ----------------------------------------------------------------------------------- |
| inline-flex    | Establece un contenedor en línea, similar a inline-block (ocupa solo el contenido). |
| flex           | Establece un contenedor en bloque, similar a block (ocupa todo el ancho del padre). |
| flex-direction | Cambia la orientación del eje principal.                                            |
| row            | Establece la dirección del eje principal en horizontal.                             |
| row-reverse    | Establece la dirección del eje principal en horizontal (invertido).                 |
| column         | Establece la dirección del eje principal en vertical.                               |
| column-reverse | Establece la dirección del eje principal en vertical (invertido).                   |

<br>

## Contendor flexbox multilinea

| Propiedad | Valor                      | Significado                                     |
| --------- | -------------------------- | ----------------------------------------------- |
| flex-wrap | nowrap, wrap, wrap-reverse | Evita o permite el desbordamiento (multilinea). |

<br>

## Propiedades de alineacion

| Propiedad       | Valor                                                                                |
| --------------- | ------------------------------------------------------------------------------------ | ---------------- |
| justify-content | flex-start , flex-end , center space-between , space-around , space-evenly           |
| align-content   | flex-start , flex-end , center , space-between, space-around, space-evenly , stretch |
| align-items     | flex-start , flex-end , center , stretch ,baseline                                   |
| align-self      | auto , flex-start , flex-end ,center                                                 | stretch baseline |

## Sobre el eje pricipal

| Valor         | Descripcion                                                                     |
| ------------- | ------------------------------------------------------------------------------- |
| flex-start    | Agrupa los ítems al principio del eje principal.                                |
| flex-end      | Agrupa los ítems al final del eje principal.                                    |
| center        | Agrupa los ítems al centro del eje principal.                                   |
| space-between | Distribuye los ítems dejando el máximo espacio para separarlos.                 |
| space-around  | Distribuye los ítems dejando el mismo espacio alrededor de ellos (izq/dcha).    |
| space-evenly  | Distribuye los ítems dejando el mismo espacio (solapado) a izquierda y derecha. |

## Propiedades de hijos

| Propiedad   | Valor | Descripcion                                                              |
| ----------- | ----- | ------------------------------------------------------------------------ |
| flex-grow   | 0     | Número que indica el factor de crecimiento del ítem respecto al resto.   |
| flex-shrink | 1     | Número que indica el factor de decrecimiento del ítem respecto al resto. |
| flex-basis  | Size  | Tamaño base de los ítems antes de aplicar variación.                     |
| order       | 0     | Número (peso) que indica el orden de aparición de los ítems.             |

## Huecos (Gaps)

| Propiedad  | Valor  | Descripcion                                          |
| ---------- | ------ | ---------------------------------------------------- |
| row-gap    | Normal | Espacio entre filas (sólo si flex-direction: column) |
| column-gap | Normal | Espacio entre columnas (sólo si flex-direction: row) |
