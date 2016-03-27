# Events #

## General ##
  * **gelato\_init**: se ejecuta antes de todo.

## Instalacion ##

  * **install\_begins**:  se ejecuta cuando la instalacion ha comenzado
  * **install\_success**: se ejecuta cuando la instalacion fue exitosa
  * **install\_fail**: se ejecuta cuando la instalacion falló
  * **install\_ends**: se ejecuta cuando la instalacion termino, bien o mal

## Actualizacion ##

  * **update\_detected**: se ejecuta cuando se detecta una nueva version disponible
  * **update\_begins**:
  * **update\_ends**:
  * **update\_success**:
  * **update\_fail**:

## Panel de Control ##
  * **admin\_head**: Runs in the HTML `head` section of the admin panel.
  * **admin\_footer**: Runs at the end of the admin panel inside the `body` tag.
  * **setting\_success**:
  * **setting\_fail**:
  * **option\_success**:
  * **option\_fail**:
  * **user\_created**:
  * **user\_edited**:
  * **user\_deleted**:
  * **user\_authenticate**:
  * **user\_authenticate\_fail**:
  * **user\_login**:
  * **user\_logout**:
  * **theme\_switch**:
  * **plugin\_activate**:
  * **plugin\_deactivate**:
  * **plugins\_loaded**:
  * **add\_options\_panel**: se ejecuta antes de finalizar el fieldset de opctions.
  * **add\_settings\_panel**: se ejecuta antes de finalizar el fieldset de settings.

## Parte Publica ##
  * **gelato\_head**: se ejecuta antes de que comienze el `html`.
  * **gelato\_footer**: se ejecuta despues de que terminó el `html`.
  * **gelato\_notready**: se ejecuta cuando no se tiene conexion con la DB.
  * **gelato\_noposts**: se ejecuta cuando no hay posts para mostrar.
  * **gelato\_404**: se ejecuta cuando se detecta un error 404.
  * **gelato\_includes**: se ejecuta antes de asignar al theme los includes.

## Posts ##
  * **post\_created**:
  * **post\_updated**:
  * **post\_deleted**:

## Comentarios ##
  * **comment\_created**:
  * **comment\_edited**:
  * **comment\_deleted**:
  * **comment\_spam**:

## Themes ##
  * **theme\_preload**: se ejecuta antes de empezar a cargar un theme.
  * **theme\_loaded**: se ejecuta cuando termino de cargar un theme.
  * **theme\_parsed**: se ejecuta cuando termino de procesar los bloques y variables.
  * **theme\_ready**: se ejecuta cuando el theme esta listo y se lo puede imprimir.
  * **theme\_printed**: se ejecuta cuando termino de imprimirlo.