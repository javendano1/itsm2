<?php
//
// File generated on 2020-09-02T01:09:18-0500
// Please do not edit manually
//
MetaModel::IncludeModule(MODULESROOT.'/core/main.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-external/model.authent-external.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-ldap/model.authent-ldap.php');
MetaModel::IncludeModule(MODULESROOT.'/authent-local/model.authent-local.php');
MetaModel::IncludeModule(MODULESROOT.'/combodo-email-synchro/classes/autoload.php');
MetaModel::IncludeModule(MODULESROOT.'/combodo-email-synchro/model.combodo-email-synchro.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-attachments/model.itop-attachments.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-attachments/main.attachments.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-backup/main.itop-backup.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-backup/model.itop-backup.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-config-mgmt/model.itop-config-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-config-mgmt/main.itop-config-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-config/model.itop-config.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-datacenter-mgmt/model.itop-datacenter-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-endusers-devices/model.itop-endusers-devices.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-hub-connector/menus.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-hub-connector/hubnewsroomprovider.class.inc.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-hub-connector/model.itop-hub-connector.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-portal-base/portal/src/controllers/abstractcontroller.class.inc.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-portal-base/portal/src/controllers/brickcontroller.class.inc.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-portal-base/portal/src/entities/abstractbrick.class.inc.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-portal-base/portal/src/entities/portalbrick.class.inc.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-portal-base/portal/src/routers/abstractrouter.class.inc.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-portal/main.itop-portal.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-profiles-itil/model.itop-profiles-itil.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-sla-computation/main.itop-sla-computation.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-standard-email-synchro/model.itop-standard-email-synchro.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-storage-mgmt/model.itop-storage-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-tickets/main.itop-tickets.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-tickets/model.itop-tickets.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-virtualization-mgmt/model.itop-virtualization-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-welcome-itil/main.itop-welcome-itil.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-welcome-itil/model.itop-welcome-itil.php');
MetaModel::IncludeModule(MODULESROOT.'/monitor-add-class/model.monitor-add-class.php');
MetaModel::IncludeModule(MODULESROOT.'/codigo_externo/model.codigo_externo.php');
MetaModel::IncludeModule(MODULESROOT.'/dvr-add-class/model.dvr-add-class.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-bridge-virtualization-storage/model.itop-bridge-virtualization-storage.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-change-mgmt-itil/model.itop-change-mgmt-itil.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-incident-mgmt-itil/model.itop-incident-mgmt-itil.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-knownerror-mgmt/model.itop-knownerror-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-problem-mgmt/model.itop-problem-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-request-mgmt-itil/model.itop-request-mgmt-itil.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-request-mgmt-itil/main.itop-request-mgmt-itil.php');
MetaModel::IncludeModule(MODULESROOT.'/itop-service-mgmt/model.itop-service-mgmt.php');
MetaModel::IncludeModule(MODULESROOT.'/requerimientos-modificacion-vista/model.requerimientos-modificacion-vista.php');
MetaModel::IncludeModule(MODULESROOT.'/service-family-incident/model.service-family-incident.php');
MetaModel::IncludeModule(MODULESROOT.'/service-family-request/model.service-family-request.php');
MetaModel::IncludeModule(MODULESROOT.'/tiempo_indisponibilidad/model.tiempo_indisponibilidad.php');
MetaModel::IncludeModule(MODULESROOT.'/combodo-sla-computation/model.combodo-sla-computation.php');
MetaModel::IncludeModule(MODULESROOT.'/combodo-sla-computation/main.combodo-sla-computation.php');
MetaModel::IncludeModule(MODULESROOT.'/incidentes_modificacion_vista/model.incidentes_modificacion_vista.php');
MetaModel::IncludeModule(MODULESROOT.'/indisponibilidad/model.indisponibilidad.php');
function GetModulesInfo()
{
$sCurrEnv = 'env-'.utils::GetCurrentEnvironment();
return array (
  'dictionaries' => 
  array (
    'root_dir' => '',
    'version' => '1.0',
  ),
  'core' => 
  array (
    'root_dir' => '',
    'version' => '1.0',
  ),
  'application' => 
  array (
    'root_dir' => '',
    'version' => '1.0',
  ),
  'authent-external' => 
  array (
    'root_dir' => $sCurrEnv.'/authent-external',
    'version' => '2.6.1',
  ),
  'authent-ldap' => 
  array (
    'root_dir' => $sCurrEnv.'/authent-ldap',
    'version' => '2.6.1',
  ),
  'authent-local' => 
  array (
    'root_dir' => $sCurrEnv.'/authent-local',
    'version' => '2.6.1',
  ),
  'combodo-email-synchro' => 
  array (
    'root_dir' => $sCurrEnv.'/combodo-email-synchro',
    'version' => '3.2.0',
  ),
  'itop-attachments' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-attachments',
    'version' => '2.6.1',
  ),
  'itop-backup' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-backup',
    'version' => '2.6.1',
  ),
  'itop-config-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-config-mgmt',
    'version' => '2.6.1',
  ),
  'itop-config' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-config',
    'version' => '2.6.1',
  ),
  'itop-datacenter-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-datacenter-mgmt',
    'version' => '2.6.1',
  ),
  'itop-endusers-devices' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-endusers-devices',
    'version' => '2.6.1',
  ),
  'itop-hub-connector' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-hub-connector',
    'version' => '2.6.1',
  ),
  'itop-portal-base' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-portal-base',
    'version' => '2.6.1',
  ),
  'itop-portal' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-portal',
    'version' => '2.6.1',
  ),
  'itop-profiles-itil' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-profiles-itil',
    'version' => '2.6.1',
  ),
  'itop-sla-computation' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-sla-computation',
    'version' => '2.6.1',
  ),
  'itop-standard-email-synchro' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-standard-email-synchro',
    'version' => '3.1.0',
  ),
  'itop-storage-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-storage-mgmt',
    'version' => '2.6.1',
  ),
  'itop-tickets' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-tickets',
    'version' => '2.6.1',
  ),
  'itop-virtualization-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-virtualization-mgmt',
    'version' => '2.6.1',
  ),
  'itop-welcome-itil' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-welcome-itil',
    'version' => '2.6.1',
  ),
  'monitor-add-class' => 
  array (
    'root_dir' => $sCurrEnv.'/monitor-add-class',
    'version' => '1.0.0',
  ),
  'codigo_externo' => 
  array (
    'root_dir' => $sCurrEnv.'/codigo_externo',
    'version' => '1.0.0',
  ),
  'dvr-add-class' => 
  array (
    'root_dir' => $sCurrEnv.'/dvr-add-class',
    'version' => '1.0.0',
  ),
  'itop-bridge-virtualization-storage' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-bridge-virtualization-storage',
    'version' => '2.6.1',
  ),
  'itop-change-mgmt-itil' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-change-mgmt-itil',
    'version' => '2.6.1',
  ),
  'itop-incident-mgmt-itil' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-incident-mgmt-itil',
    'version' => '2.6.1',
  ),
  'itop-knownerror-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-knownerror-mgmt',
    'version' => '2.6.1',
  ),
  'itop-problem-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-problem-mgmt',
    'version' => '2.6.1',
  ),
  'itop-request-mgmt-itil' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-request-mgmt-itil',
    'version' => '2.6.1',
  ),
  'itop-service-mgmt' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-service-mgmt',
    'version' => '2.6.1',
  ),
  'requerimientos-modificacion-vista' => 
  array (
    'root_dir' => $sCurrEnv.'/requerimientos-modificacion-vista',
    'version' => '1.0.0',
  ),
  'service-family-incident' => 
  array (
    'root_dir' => $sCurrEnv.'/service-family-incident',
    'version' => '1.0.0',
  ),
  'service-family-request' => 
  array (
    'root_dir' => $sCurrEnv.'/service-family-request',
    'version' => '1.0.0',
  ),
  'tiempo_indisponibilidad' => 
  array (
    'root_dir' => $sCurrEnv.'/tiempo_indisponibilidad',
    'version' => '1.0.0',
  ),
  'combodo-sla-computation' => 
  array (
    'root_dir' => $sCurrEnv.'/combodo-sla-computation',
    'version' => '2.2.0',
  ),
  'incidentes_modificacion_vista' => 
  array (
    'root_dir' => $sCurrEnv.'/incidentes_modificacion_vista',
    'version' => '1.0.0',
  ),
  'indisponibilidad' => 
  array (
    'root_dir' => $sCurrEnv.'/indisponibilidad',
    'version' => '1.0.0',
  ),
  'itop-full-itil' => 
  array (
    'root_dir' => $sCurrEnv.'/itop-full-itil',
    'version' => '2.6.1',
  ),
  'combodo-coverage-windows-computation' => 
  array (
    'root_dir' => $sCurrEnv.'/combodo-coverage-windows-computation',
    'version' => '2.0.4',
  ),
);
}
