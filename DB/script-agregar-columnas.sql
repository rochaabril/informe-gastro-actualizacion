ALTER TABLE `informes` 
ADD COLUMN `fecha_nacimiento_paciente` DATE NULL AFTER `id_cobertura`,
ADD COLUMN `numero_afiliado` INT NULL AFTER `fecha_nacimiento_paciente`,
ADD COLUMN `medico_envia_estudio` VARCHAR(100) NULL AFTER `numero_afiliado`,
ADD COLUMN `motivo_estudio` VARCHAR(100) NULL AFTER `medico_envia_estudio`,
ADD COLUMN `estomago` VARCHAR(100) NULL AFTER `motivo_estudio`,
ADD COLUMN `duodeno` VARCHAR(100) NULL AFTER `estomago`,
ADD COLUMN `esofago` VARCHAR(100) NULL AFTER `duodeno`,
ADD COLUMN `conclusion` TEXT NULL AFTER `esofago`,
ADD COLUMN `efectuo_terapeutica` BIT NULL AFTER `conclusion`,
ADD COLUMN `tipo_terapeutica` VARCHAR(15) NULL AFTER `efectuo_terapeutica`,
ADD COLUMN `efectuo_biopsia` BIT NULL AFTER `tipo_terapeutica`,
ADD COLUMN `fracos_biopsia` INT NULL AFTER `efectuo_biopsia`,
ADD COLUMN `informe` TEXT NULL AFTER `fracos_biopsia`;