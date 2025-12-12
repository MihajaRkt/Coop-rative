INSERT INTO chauffeurs (nom) VALUES
('Jean Dupont'),
('Amadou Diallo'),
('Pierre Koffi');

INSERT INTO vehicules (nom) VALUES
('Toyota Hiace'),
('Mercedes Sprinter'),
('Nissan Caravan');

INSERT INTO trajet (debut, fin, distance, idvehicule, idchauffeur, recetteMt, typee, carburantMt) VALUES
-- Véhicule 1 : Toyota Hiace - Chauffeur Jean
('2025-01-10 07:00', '2025-01-10 08:10', 35, 1, 1, 15000, 'A', 3000),
('2025-01-10 09:00', '2025-01-10 10:20', 40, 1, 1, 18000, 'A', 3200),
('2025-01-10 16:00', '2025-01-10 17:05', 30, 1, 1, 12000, 'A', 2800),

-- Véhicule 2 : Mercedes Sprinter - Chauffeur Amadou
('2025-01-10 06:30', '2025-01-10 07:45', 38, 2, 2, 16000, 'B', 3100),
('2025-01-10 08:30', '2025-01-10 09:50', 42, 2, 2, 19000, 'B', 3300),

-- Véhicule 3 : Nissan Caravan - Chauffeur Pierre
('2025-01-10 07:15', '2025-01-10 08:30', 33, 3, 3, 14000, 'A', 2900),
('2025-01-10 09:20', '2025-01-10 10:40', 45, 3, 3, 20000, 'A', 3400),
<<<<<<< HEAD
('2025-01-10 11:30', '2025-01-10 12:50', 43, 3, 3, 19500, 'A', 3300);
=======
('2025-01-10 11:30', '2025-01-10 12:50', 43, 3, 3, 19500, 'A', 3300);
>>>>>>> 928b532 (yes)
