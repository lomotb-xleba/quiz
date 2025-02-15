-- pisalka.sql
CREATE TABLE questions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question TEXT NOT NULL,
    answer_a VARCHAR(255) NOT NULL,
    answer_b VARCHAR(255) NOT NULL,
    answer_c VARCHAR(255) NOT NULL,
    answer_d VARCHAR(255) NOT NULL,
    answer_e VARCHAR(255) NOT NULL,
    answer_f VARCHAR(255) NOT NULL,
    correct_answer VARCHAR(1) NOT NULL
);

INSERT INTO questions (question, answer_a, answer_b, answer_c, answer_d, answer_e, answer_f, correct_answer) VALUES
('Что такое квантовая суперпозиция?', 'Состояние, при котором частица находится в нескольких состояниях одновременно.', 'Состояние, при котором частица имеет определённое положение.', 'Эффект, при котором частица теряет массу.', 'Процесс, когда частица испускает фотон.', 'Состояние, при котором частица полностью определена.', 'Изменение скорости света в вакууме.', 'a'),
('Как называется принцип, согласно которому невозможно одновременно точно знать положение и импульс частицы?', 'Принцип неопределённости Гейзенберга.', 'Принцип допплера.', 'Закон сохранения энергии.', 'Принцип Райли.', 'Принцип равенства.', 'Принцип равновесия.', 'a'),
('Кто из следующих учёных ввёл понятие "квант"?', ' Максимилиан Планк.', 'Альберт Эйнштейн.', 'Нильс Бор.', 'Луи де Бройль.', 'Ричард Фейнман.', 'Эрик Шрёдингер.', 'a'),
('Что такое квантовая запутанность?', ' Когда два или более квантовых объекта становятся взаимосвязанными так, что состояние одного зависит от состояния другого.', 'Взаимодействие вещества с полем.', 'Процесс, в котором частицы распадаются на более мелкие части.', 'Принцип, при котором частица теряет всю свою энергию.', 'Явление, при котором частицы не взаимодействуют друг с другом.', 'Единица измерения энергии.', 'a'),
('Какой эксперимент продемонстрировал волновую природу света?', 'Эксперимент с двумя щелями.', 'Эксперимент с рентгеновским излучением.', 'Эксперимент с магнитными полями.', 'Эксперимент по измерению гравитации.', 'Эксперимент с фотонами.', 'Эксперимент с термодинамикой.', 'a'),
('Что такое "квантовая туннелирование"?', 'Процесс, при котором частица проходит через энергобарьер, даже если её энергия меньше, чем энергия барьера.', 'Путешествие частицы с постоянной скоростью.', 'Изменение направления света при прохождении через призму.', 'Увеличение массы частицы при повышении температуры.', 'Процесс, при котором частица разрушается.', 'Процесс, при котором частицы создаются из энергии.', 'a'),
('Какое явление описывает уравнение Шрёдингера?','Динамику квантовых систем.','Закон сохранения импульса.','Применение термодинамических законов.','Разделение света на цвета.','Появление черных дыр.','Движение планет.','a');
