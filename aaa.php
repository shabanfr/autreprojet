<div id="demoabc"></div>
<div class="autocomplete-list">
              <!-- ngIf: !vm.autocompleteResults.length && !!vm.ajoutTravauxSearch -->
              <!-- ngRepeat: autocompleteLot in vm.autocompleteResults --><div class="mb-3 ng-scope" ng-repeat="autocompleteLot in vm.autocompleteResults">
                <!-- ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">

                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Peinture plafond sur fond nécessitant une légère préparation</span>
                      <br><small class="text-muted ng-binding">Ponçage des parties abimées, reprise partielle d'enduit et 2 couches de peinture en finition.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">30&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                        
                        <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Peinture murale sur fond propre</span>
                      <br><small class="text-muted ng-binding">Léger ponçage et 2 couches de peinture en finition.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">25&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                        
                        <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Peinture murale sur toile de verre existante</span>
                      <br><small class="text-muted ng-binding">Lessivage de l'ancien support, plus couches de peinture en finition.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">20&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Peinture plafond sur fond propre</span>
                      <br><small class="text-muted ng-binding">Léger ponçage et 2 couches de peinture en finition.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">28&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                        
                        <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix -->
              </div><!-- end ngRepeat: autocompleteLot in vm.autocompleteResults --><div class="mb-3 ng-scope" ng-repeat="autocompleteLot in vm.autocompleteResults">
                <!-- ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose d'une grande cuisine (plus de 12 m²)</span>
                      <br><small class="text-muted ng-binding">Prix forfaitaire indicatif et variant fortement selon le projet. Compris : dépose de l'ancienne cuisine, carrelages. Non compris : électroménager.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">15&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose d'un four encastrable</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">590&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose d'une cuisine de taille moyenne (entre 8 et 12 m²)</span>
                      <br><small class="text-muted ng-binding">Prix forfaitaire indicatif et variant fortement selon le projet. Compris : dépose de l'ancienne cuisine, carrelages. Non compris : électroménager.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">12&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture d'une cuisine équipée entrée de gamme</span>
                      <br><small class="text-muted ng-binding">Compris : meubles de cuisine en finition laque sans poignées
Meuble bas ouvert 20 cm
Meuble sous evier tiroir poubelle
Meuble bas four
Casserolier 2 tiroir 60 cm
Range épices 15 cm
Fileur 
Meuble haut aventos 120 cm
Grand meuble haut 160 cm
Meuble 3 tiroirs 90 cm
Plinthes
Plan de travail stratifié (prix public : 300 à 400 € TTC)
Non compris : électroménager</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">2&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose d'un lave-vaisselle</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">560&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose d'une plaque de cuisson</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">600&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture d'une cuisine équipée milieu de gamme - "confort"</span>
                      <br><small class="text-muted ng-binding">Compris : meubles de cuisine en finition laque sans poignées
Meuble bas ouvert 20 cm 
Meuble sous evier tiroir poubelle
Meuble bas four
Casserolier 2 tiroir 60 cm
Range épices 15 cm
Fileur 
Meuble haut aventos 120 cm
Grand meuble haut 160 cm
Meuble 3 tiroirs 90 cm
Plinthes
Plan de travail stratifié (prix public : 400 à 600 € TTC)
Non compris : électroménager</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">6&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture d'une cuisine équipée haut de gamme</span>
                      <br><small class="text-muted ng-binding">Compris : meubles de cuisine en finition laque sans poignées
Meuble bas ouvert 20 cm
Meuble sous evier tiroir poubelle
Meuble bas four
Casserolier 2 tiroir 60 cm
Range épices 15 cm
Fileur
Meuble haut aventos 120 cm
Grand meuble haut 160 cm
Meuble 3 tiroirs 90 cm
Plinthes
Plan de travail stratifié (prix public : 1 400 à 2 000 € TTC)
Non compris : électroménager</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">16&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose d'un réfrigérateur</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">445&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture d'une cuisine équipée milieu de gamme - "confort plus"</span>
                      <br><small class="text-muted ng-binding">Compris : meubles de cuisine en finition laque sans poignées
Meuble bas ouvert 20 cm 
Meuble sous evier tiroir poubelle
Meuble bas four 
Casserolier 2 tiroir 60 cm
Range épices 15 cm
Fileur 
Meuble haut aventos 120 cm
Grand meuble haut 160 cm
Meuble 3 tiroirs 90 cm :
Plinthes
Plan de travail stratifié (prix public : 900 à 1 200 € TTC)
Non compris : électroménager</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">12&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Pose seule d'une cuisine de taille moyenne (entre 8 et 12 m²)</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">1&nbsp;350&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose d'une très petite cuisine, type kitchenette (moins de 5 m²)</span>
                      <br><small class="text-muted ng-binding">Prix forfaitaire indicatif et variant fortement selon le projet. Compris : dépose de l'ancienne cuisine, carrelages. Non compris : électroménager.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">3&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Raccordement de lave-vaisselle</span>
                      <br><small class="text-muted ng-binding">Fourniture et pose d'un robinet d'arrivée d'eau et d'un siphon de vidange + alimentation électrique / reprise sur tuyauteries et réseaux existants.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">256&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Pose seule d'une grande cuisine (plus de 12 m²)</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">1&nbsp;785&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Pose seule d'une très petite cuisine (moins de 5 m²)</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">400&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose d'une hotte</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">615&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Pose seule d'une cuisine petite cuisine (entre 5 et 8 m²)</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">800&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose d'une petite cuisine (entre 5 et 8 m²)</span>
                      <br><small class="text-muted ng-binding">Prix forfaitaire indicatif et variant fortement selon le projet. Compris : dépose de l'ancienne cuisine, carrelages. Non compris : électroménager.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">8&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix -->
              </div><!-- end ngRepeat: autocompleteLot in vm.autocompleteResults --><div class="mb-3 ng-scope" ng-repeat="autocompleteLot in vm.autocompleteResults">
                <!-- ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de prise électrique haute puissance (PC32A)</span>
                      <br><small class="text-muted ng-binding">Compris : raccordement et protection au tableau électrique. Non compris : saignées ou goulottes éventuelles.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">150&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de tableau électrique 1 rangée</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">650&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de prise TV</span>
                      <br><small class="text-muted ng-binding">Compris : raccordement et protection au tableau électrique. Non compris : saignées ou goulottes éventuelles.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">119&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de tableau électrique 5 rangées</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">1&nbsp;600&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de luminaire</span>
                      <br><small class="text-muted ng-binding">Spots led, appliques murales. Les plafonniers sont plus chers (120 € l'unité).</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">80&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de prise réseau RJ45 (ethernet)</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">125&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de tableau électrique 4 rangées</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">1&nbsp;300&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de disjoncteur général</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">240&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose d'interrupteur de type va-et-vient</span>
                      <br><small class="text-muted ng-binding">Compris : raccordement et protection au tableau électrique.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">145&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de prise électrique standard (PC16A)</span>
                      <br><small class="text-muted ng-binding">Compris : raccordement et protection au tableau électrique. Non compris : saignées ou goulottes éventuelles.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">90&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de tableau électrique 3 rangées</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">1&nbsp;150&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose d'une prise téléphone</span>
                      <br><small class="text-muted ng-binding">Compris : raccordement et protection au tableau électrique. Non compris : saignées ou goulottes éventuelles.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">119&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose d'interrupteur simple</span>
                      <br><small class="text-muted ng-binding">Compris : raccordement et protection au tableau électrique.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">125&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de tableau électrique 2 rangées</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">900&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix -->
              </div><!-- end ngRepeat: autocompleteLot in vm.autocompleteResults --><div class="mb-3 ng-scope" ng-repeat="autocompleteLot in vm.autocompleteResults">
                <!-- ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Tablier de baignoire en carreaux de plâtre </span>
                      <br><small class="text-muted ng-binding">Avec une trappe d'accès pour effectuer les raccordements de plomberie et l'entretient.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">370&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Receveur de douche + mitigeur</span>
                      <br><small class="text-muted ng-binding">Fourniture et installation de receveur à encastrer avec mitigeur, compris mise en place, calage du receveur.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">900&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Lavabo sur colonne</span>
                      <br><small class="text-muted ng-binding">Lavabo sur colonne, compris mitigeur et fixations.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">280&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Lavabo double vasque sur colonne + mitigeur</span>
                      <br><small class="text-muted ng-binding">Lavabo double vasque sur colonne, compris mitigeur et fixations.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">645&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Douche à l'italienne</span>
                      <br><small class="text-muted ng-binding">Compris receveur de douche (possibilité d'encastrer), carrelage sur receveur, plomberie, mitigeur, flexible (possibilité d'encaster), paroi vitrée simple de 80 cm de large. Non compris : revêtements muraux.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">2&nbsp;050&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Sèche-serviette électrique</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">485&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Installation VMC salle de bain</span>
                      <br><small class="text-muted ng-binding">Fourniture d'un extracteur d'air, compris création d'une ligne électrique et raccordement sur gaine de ventilation existante.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">510&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Mitigeur thermostatique, douchette, flexible et barre de douche</span>
                      <br><small class="text-muted ng-binding">Fourniture et installation des éléments cités, avec raccordements existants.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">329&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Cabine de douche</span>
                      <br><small class="text-muted ng-binding">Installation comprenant receveur, ossature en aluminium, portes et parois en verre, mitigeur thermostatique, douchette, flexible et barre de douche.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">1&nbsp;150&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Forfait entretien ventilation - VMC</span>
                      <br><small class="text-muted ng-binding">Entretien de groupe d'extraction de ventilation mécanique avec démontage et nettoyage du ventilateur et graissage des roulements.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">169&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Raccordement de machine à laver</span>
                      <br><small class="text-muted ng-binding">Fourniture et pose d'un robinet d'arrivée d'eau et d'un siphon de vidange + alimentation électrique / reprise sur tuyauteries et réseaux existants.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">256&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Baignoire d'angle</span>
                      <br><small class="text-muted ng-binding">Baignoire d'angle en matériaux de synthèse. Compris : calage, mise à niveau et fixations.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">1&nbsp;126&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Baignoire standard</span>
                      <br><small class="text-muted ng-binding">Baignoire en matériaux de synthèse, compris calage, mise à niveau, fixations, et tablier.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">648&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Bloc WC</span>
                      <br><small class="text-muted ng-binding">Fourniture et pose de bloc WC, compris mise en place du bloc avec abattant et raccordements d'alimentation et d'évacuation.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">578&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Paroi de douche</span>
                      <br><small class="text-muted ng-binding">Parois de douche, accès de face 1 ou 2 panneaux en verre sur cadre aluminium, compris fixation sur cloisons ou murs.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">630&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Baignoire balnéo</span>
                      <br><small class="text-muted ng-binding">Compris : calage, mise à niveau, fixations et tablier, avec raccordements d'alimentation.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">2&nbsp;900&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Cuvette WC suspendue + réservoir encastré</span>
                      <br><small class="text-muted ng-binding">Cuvette WC suspendue avec abattant sur bâti support et réservoir encastré à commande mécanique par plaque murale, compris mise en place du bâti et cuvette, raccordements d'alimentation et d'évacuation sur attentes.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">800&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Lavabo suspendu</span>
                      <br><small class="text-muted ng-binding">Lavabo suspendu, compris mitigeur et fixations.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">320&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix -->
              </div><!-- end ngRepeat: autocompleteLot in vm.autocompleteResults --><div class="mb-3 ng-scope" ng-repeat="autocompleteLot in vm.autocompleteResults">
                <!-- ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Forfait fourniture et pose de cloisons en BA13 phonique</span>
                      <br><small class="text-muted ng-binding">Compris : isolant de 75 cm d'épaisseur, rails montants de 7 cm d'épaisseur, désolidarisation du sol afin d'éviter la conductivité du son.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">2&nbsp;400&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Cloison en carreaux de plâtre de 7 cm d'épaisseur</span>
                      <br><small class="text-muted ng-binding">Le carreau de plâtre sera résistant à l'eau (hydrofuge) si il est placé dans une pièce humide.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">40&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                        
                        <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Forfait fourniture et pose de cloisons en BA13 phonique</span>
                      <br><small class="text-muted ng-binding">Compris : isolant de 75 cm d'épaisseur, rails montants de 7 cm d'épaisseur, désolidarisation du sol afin d'éviter la conductivité du son.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">3&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Forfait fourniture et pose de cloisons en BA13 phonique</span>
                      <br><small class="text-muted ng-binding">Compris : isolant de 75 cm d'épaisseur, rails montants de 7 cm d'épaisseur, désolidarisation du sol afin d'éviter la conductivité du son.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">1&nbsp;600&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Faux plafond composé de BA13 et d'une isolation par laine minérale suspendu sur des rails métalliques rampants le long de la charpente</span>
                      <br><small class="text-muted ng-binding">Le placostyl sera résistant à l'eau (hydrofuge) s'il est placé dans une pièce humide.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">38&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                        
                        <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Cloison placostil 72 composées de BA13 montées sur rail et montants métalliques</span>
                      <br><small class="text-muted ng-binding">Le placostyl sera résistant à l'eau (hydrofuge) si il est placé dans une pièce humide.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">59&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                        
                        <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Forfait fourniture et pose de cloisons en BA13 phonique</span>
                      <br><small class="text-muted ng-binding">Compris : isolant de 75 cm d'épaisseur, rails montants de 7 cm d'épaisseur, désolidarisation du sol afin d'éviter la conductivité du son.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">1&nbsp;900&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix -->
              </div><!-- end ngRepeat: autocompleteLot in vm.autocompleteResults --><div class="mb-3 ng-scope" ng-repeat="autocompleteLot in vm.autocompleteResults">
                <!-- ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de chaudière gaz à condensation</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">2&nbsp;500&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix -->
              </div><!-- end ngRepeat: autocompleteLot in vm.autocompleteResults --><div class="mb-3 ng-scope" ng-repeat="autocompleteLot in vm.autocompleteResults">
                <!-- ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Forfait fourniture et pose d'une grande verrière</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">7&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de bâti de porte standard</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">62&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Forfait fourniture et pose de menuiseries sur mesure</span>
                      <br><small class="text-muted ng-binding">Dressing, bibliothèque, placard, meubles...
Prix très approximatif à affiner en fonction des prestations souhaitées.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">8&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Forfait fourniture et pose de menuiseries sur mesure</span>
                      <br><small class="text-muted ng-binding">Dressing, bibliothèque, placard, meubles...
Prix très approximatif à affiner en fonction des prestations souhaitées.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">12&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Forfait fourniture et pose de fenêtre</span>
                      <br><small class="text-muted ng-binding">Prix très approximatif à approndondir, varie selon taille de la fenêtre et matériaux (PVC, bois, aluminium).</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">1&nbsp;300&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Forfait fourniture et pose d'une verrière de taille moyenne</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">5&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de fenêtre PVC 2 ouvrants format standard</span>
                      <br><small class="text-muted ng-binding">Fenêtre en double-vitrage. Compris : dépose totale de l'ancien bâti.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">1&nbsp;300&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Forfait fourniture et pose de fenêtre</span>
                      <br><small class="text-muted ng-binding">Prix forfaitaire indicatif et variant fortement selon le type de fenêtre (PVC, bois, aluminium) ainsi que son niveau de qualité.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">1&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Forfait fourniture et pose d'une petite verrière</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">2&nbsp;500&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de fenêtre PVC 1 ouvrant grand format</span>
                      <br><small class="text-muted ng-binding">Fenêtre en double-vitrage. Compris : dépose totale de l'ancien bâti.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">1&nbsp;100&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de porte coulissante encastrée (à galandage)</span>
                      <br><small class="text-muted ng-binding">Porte de 93cm.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">1&nbsp;600&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Forfait fourniture et pose de menuiseries sur mesure</span>
                      <br><small class="text-muted ng-binding">Dressing, bibliothèque, placard, meubles...
Prix très approximatif à affiner en fonction des prestations souhaitées.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">5&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de fenêtre PVC 2 ouvrants grand format, type porte-fenêtre (environ 200x200 cm)</span>
                      <br><small class="text-muted ng-binding">Fenêtre en double-vitrage. Compris : dépose totale de l'ancien bâti.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">1&nbsp;700&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Forfait fourniture et pose de menuiseries sur mesure</span>
                      <br><small class="text-muted ng-binding">Dressing, bibliothèque, placard, meubles...
Prix très approximatif à affiner en fonction des prestations souhaitées.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">2&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de fenêtre PVC 1 ouvrant format standard</span>
                      <br><small class="text-muted ng-binding">Fenêtre en double-vitrage. Compris : dépose totale de l'ancien bâti.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">1&nbsp;100&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix -->
              </div><!-- end ngRepeat: autocompleteLot in vm.autocompleteResults --><div class="mb-3 ng-scope" ng-repeat="autocompleteLot in vm.autocompleteResults">
                <!-- ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Mix carrelage mural + peinture résistant à l'eau (hydrofuge)</span>
                      <br><small class="text-muted ng-binding">Fourniture et pose carrelage mural sur 2/3 hauteur + peinture avec enduit repassé (30%), rebouchage, ponçage et 2 couches de peinture résistant à l'eau (hydrofuge).</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">61&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                        
                        <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de papier peint</span>
                      <br><small class="text-muted ng-binding">Pose de papier peint avec raccords sur paroi à parement avec découpes, horizontal ou incliné, y compris arasements et découpes.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">26&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                        
                        <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Toile de verre</span>
                      <br><small class="text-muted ng-binding">Fourniture et pose de toile de verre sur paroi uniforme, compris arasements et découpes.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">13&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Fourniture et pose de carrelage mural</span>
                      <br><small class="text-muted ng-binding">Fourniture et pose de carreaux en grès, en simple encollage, compris joint au mortier industriel.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">95&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                        
                        <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Lambris pin - sapin</span>
                      <br><small class="text-muted ng-binding">Lambris à coupes perdues, assemblage par rainures et languettes collées.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">61&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                        
                        <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix -->
              </div><!-- end ngRepeat: autocompleteLot in vm.autocompleteResults --><div class="mb-3 ng-scope" ng-repeat="autocompleteLot in vm.autocompleteResults">
                <!-- ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Forfait isolation de combles</span>
                      <br><small class="text-muted ng-binding">Prix très approximatif à affiner</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">30&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire --><span ng-if="!baseDePrix.unite.unitaire" class="ng-binding1 ng-scope">/ m²</span><!-- end ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix -->
              </div><!-- end ngRepeat: autocompleteLot in vm.autocompleteResults --><div class="mb-3 ng-scope" ng-repeat="autocompleteLot in vm.autocompleteResults">
                <!-- ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Forfait installation de salle de bain</span>
                      <br><small class="text-muted ng-binding">Prix forfaitaire indicatif et variant fortement selon le projet. Compris : équipements (lavabo, baignoire, douche), carrelages, VMC.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">8&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Forfait installation de salle de bain</span>
                      <br><small class="text-muted ng-binding">Prix forfaitaire indicatif et variant fortement selon le projet. Compris : équipements (lavabo, baignoire, douche), carrelages, VMC.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">12&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Forfait installation de salle de bain</span>
                      <br><small class="text-muted ng-binding">Prix forfaitaire indicatif et variant fortement selon le projet. Compris : équipements (lavabo, baignoire, douche), carrelages, VMC.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">10&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Forfait installation de salle de bain</span>
                      <br><small class="text-muted ng-binding">Prix forfaitaire indicatif et variant fortement selon le projet. Compris : équipements (lavabo, baignoire, douche), carrelages, VMC.</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">5&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT --><small ng-if="baseDePrix.prixFournitureStandardHT" class="ng-scope">
                          <!-- ngIf: !baseDePrix.unite.unitaire -->
                      </small><!-- end ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix -->
              </div><!-- end ngRepeat: autocompleteLot in vm.autocompleteResults --><div class="mb-3 ng-scope" ng-repeat="autocompleteLot in vm.autocompleteResults">
                <!-- ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Reprise ponctuelle des murs suite à ouverture de mur porteur</span>
                      <br><small class="text-muted ng-binding"></small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">400&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix -->
              </div><!-- end ngRepeat: autocompleteLot in vm.autocompleteResults --><div class="mb-3 ng-scope" ng-repeat="autocompleteLot in vm.autocompleteResults">
                <!-- ngRepeat: baseDePrix in autocompleteLot.basesDePrix --><div role="button" class="autocomplete-result mb-3 p-2 ng-scope" ng-click="vm.addLigneFromBaseDePrix(lot, baseDePrix)" ng-repeat="baseDePrix in autocompleteLot.basesDePrix" tabindex="0">
                  <div class="row">
                    <div class="col-sm-8">
                      <span class="text-primary ng-binding">Etude d'un bureau technique pour ouverture de mur porteur</span>
                      <br><small class="text-muted ng-binding">Etude du bureau technique afin d'évaluer la faisabilite de la démolition du mur porteur.
Détermination de la "reprise de charge" nécessaire pour soutenir l'ouvrage.
Prix variable en fonction de l'étage du bâtiment et du nombre d'étages total (de 1 000 € à 2 000 € en général).</small>
                    </div>
                    <div class="col-sm-4 text-right">
                      <span ng-bind-html="baseDePrix.prixUnitaireStandardHT|euro" class="ng-binding1">2&nbsp;000&nbsp;€</span>
                      <!-- ngIf: !baseDePrix.unite.unitaire -->
                      <br>
                      <!-- ngIf: baseDePrix.prixFournitureStandardHT -->
                    </div>
                  </div>
                </div><!-- end ngRepeat: baseDePrix in autocompleteLot.basesDePrix -->
              </div><!-- end ngRepeat: autocompleteLot in vm.autocompleteResults -->
            </div>

<script type="text/javascript">
function getXMLHttpRequest() {
    var xhr = null;

    if (window.XMLHttpRequest || window.ActiveXObject) {
        if (window.ActiveXObject) {
            try {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
        } else {
            xhr = new XMLHttpRequest();
        }
    } else {
        alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
        return null;
    }

    return xhr;
}


var x = document.getElementsByClassName("text-primary");
var f = document.getElementsByClassName("text-muted");
var g = document.getElementsByClassName("text-right");

//document.getElementById("demoabc").innerHTML = g.length;
var i;
/*
for (i = 0; i < g.length; i++) {
document.getElementById("demoabc").innerHTML += g[i].innerHTML;
}
*/


for (i = 0; i < f.length; i++) {
  var xx = x[i].innerHTML;
  var ff = f[i].innerHTML;
  var hh = parseInt(prompt("Type de projet: " + x[i].innerHTML));
  var gg = parseInt(prompt(g[i].innerHTML));

alert(xx+"<br>"+ff+"<br>"+hh+"<br>"+gg);

var xhr = getXMLHttpRequest();
xhr.open("GET", "mm.php?e="+hh+"&f="+xx+"&g="+ff+"&h="+gg, true);
xhr.send(null);

}


/*

*/

</script>