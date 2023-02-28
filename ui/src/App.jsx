import logo from './logo.svg';
import styles from './App.module.css';

function App() {

  async function getData() {
    const response = await fetch('http://localhost/phpSolidTest/api/');
    const data = await response.json();
    console.log(data);
  }

  getData();

  return (
    <div class={styles.App}>
    asdfasfdwer
    </div>
  );
}

export default App;
