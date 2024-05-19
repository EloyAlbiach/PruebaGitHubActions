# PruebaGitHubActions
## Automatizando sonarcloud

Se crea un "Quality Gate" personalizado (Proyecto -> Administration -> Quality Gate -> Organization's settings) al que se le añade una condición:
**Vulnerabilities is greater than 0** . Esta condición hace fallar el análisis al encontrar una o más vulnerabilidades.

Para que esto se refleje en las GitHub Actions, debemos añadir una condición al fichero "sonar-project.properties":
``` sonar.qualitygate.wait=true ```
 de forma que espere al resultado del análisis siguiendo las pautas marcadas por el Quality Gate personalizado.
